<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Repositories\RepositoryInterface\AuthorRepositoryInterface;

class AuthorController extends Controller
{
    protected $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository){
        $this->authorRepository = $authorRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $author = $this->authorRepository->getAuthor();
        return view('authors.view', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        if ($this->authorRepository->createAuthor($request->only('author_name', 'author_avatar', 'author_desc'))) {
            return redirect()->route('admin.authors.index')->with('add_success', trans('message.author.add_success'));
        } else {
            return redirect()->route('admin.authors.index')->with('Fail', trans('message.author.add_fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($author_id)
    {
        $author = $this->authorRepository->findAuthor($author_id);
        
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $author_id)
    {
        $update = $this->authorRepository->updateAuthor($author_id, $request->all());
        if ($update) {
            return redirect()->route('admin.authors.index')->with('Success', trans('message.author.update_success'));
        } else {
            return redirect()->route('admin.authors.edit')->with('Fail', trans('message.author.update_fail'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteResult = $this->authorRepository->deleteAuthor($id);
        if ($deleteResult) {
            return redirect()->route('admin.authors.index')->with('del_success', trans('message.author.del_success'));
        } else {
            return redirect()->back()->with('Fail', trans('message.author.del_fail'));
        }
    }
}
