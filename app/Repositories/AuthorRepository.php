<?php
namespace App\Repositories;

use App\Models\Author;
use App\Repositories\RepositoryInterface\AuthorRepositoryInterface;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{

    public function getModel()
    {
        return Author::class;
    }

    public function getAuthor()
    {
        return $this->model->orderBy('author_id','DESC')->get();
    }
    
    public function findAuthor($author_id)
    {
        return Author::find($author_id);
    }

    public function createAuthor(array $data)
    {
        $result = false;
        try {
            if ($data['author_avatar']) {
                $file = $data['author_avatar'];
                $image = uniqid() . '_' . $file->getClientOriginalName();
                $file->move('image', $image);
            }
            $author = $this->model->create([
                'author_name' => $data['author_name'],
                'author_desc' => $data['author_desc'],
                'author_avatar' => $image,
            ]);
            $result = true;
        } catch (Exception $exception) {

            return $result;
        }
        return $result;
    }

    public function updateAuthor($author_id, array $data)
    {
        try {
            if ($data['author_avatar']) {
                $file = $data['author_avatar'];
                $image = uniqid() . '_' . $file->getClientOriginalName();
                $file->move('image', $image);
            }
            $author = $this->model->find($author_id);
            $author->author_name = $data['author_name'];
            $author->author_avatar = $image;
            $author->author_desc= $data['author_desc'];
            $author->save();
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    public function deleteAuthor($id)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }
}
