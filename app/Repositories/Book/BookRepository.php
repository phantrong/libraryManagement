<?php

namespace App\Repositories\Book;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    protected $perPage = 10;

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Book::class;
    }

    public function getListBook($fillter = [])
    {
        $books = $this->model;
        if (array_key_exists('category', $fillter)) {
            $books->where('category', $fillter['category']);
        }
        if (array_key_exists('sort', $fillter)) {
            if ($fillter['sort']) {
                $books->orderBy('name');
            } else {
                $books->orderByDesc('name');
            }
        }
        if (array_key_exists('name', $fillter)) {
            $books->where('name', 'like', '%' . $fillter['name'] . '%');
        }
        return $this->model->orderByDesc('updated_at')->paginate($this->perPage);
    }

    public function getListCategory()
    {
        return DB::table('users')->select('category')->distinct()->get();
    }

    public function getListBookByName($name)
    {
        return $this->model->where('name', 'like', '%' . $name . '%')->paginate($this->perPage);
    }
}
