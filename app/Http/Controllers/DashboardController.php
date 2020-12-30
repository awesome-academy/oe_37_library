<?php

namespace App\Http\Controllers;

use App\Charts\BorrowMonthChart;
use App\Charts\BorrowQuarterChart;
use App\Charts\BorrowYearChart;
use App\Repositories\RepositoryInterface\BorrowRepositoryInterface;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;

class DashboardController extends Controller
{
    protected $borrowRepository;
    protected $userRepository;

    public function __construct(
        BorrowRepositoryInterface $borrowRepository,
        UserRepositoryInterface $userRepository
    )
    {
        $this->borrowRepository = $borrowRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $dataMonth = $this->borrowRepository->getDataMonth();
        $dataYear = $this->borrowRepository->getDataYear();
        
        $monthChart = new BorrowMonthChart;
        $monthChart->labels($dataMonth['mLabels']);
        $monthChart->dataset(trans('admin.chart.labelMonth'), 'bar', $dataMonth['mdata'])->backgroundColor('red');

        $quarterChart = new BorrowQuarterChart;
        $quarterChart->labels($this->borrowRepository->getLabelsQuarter());
        $quarterChart->dataset(trans('admin.chart.labelQuarter'), 'line', $this->borrowRepository->countQuarter());

        $yearChart = new BorrowYearChart;
        $yearChart->labels($dataYear['yLabels']);
        $yearChart->dataset(trans('admin.chart.labelYear'), 'line', $dataYear['ydata'])->backgroundColor('orange');

        return view('admin', compact('monthChart', 'quarterChart', 'yearChart'));
    }

    public function userCountChart()
    {
        $arrLabels = [];
        $arrData = [];
        for ($i=1; $i < 13; $i++) { 
            $arrLabels[] = trans('admin.chart.month') . $i;
            $arrData[] = $this->userRepository->userCountByMonth($i);
        }

        return response()->json(array("labels" => $arrLabels, "data" => $arrData));
    }
}
