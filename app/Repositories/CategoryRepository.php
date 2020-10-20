<?php
namespace App\Repositories;
use App\Repositories\RepositoryInterface\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAll()
    {
        return Category::whereNull('parent_id')->with('children')->paginate(config('app.paginate'));
    }

    public function getAllNoPagination()
    {
        return Category::whereNull('parent_id')->with('children')->get();
    }

    public function getParent()
    {
        return Category::whereNull('parent_id')->get();
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function create($attributes = []){
        return Category::create($attributes);
    }

    public function update($id, $attributes = [])
    {
        $cat = Category::find($id);
        if($cat){
            $cat->update($attributes);

            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $cat = Category::find($id);
        if($cat){
            $cat->delete();

            return true;
        }
        return false;
    }
}
