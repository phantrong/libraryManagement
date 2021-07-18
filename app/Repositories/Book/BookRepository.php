<?php

namespace App\Repositories\Book;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{
    protected $perPage = 10;

    //lấy model tương ứng
    public function getModel()
    {
        return Book::class;
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

    public function getTextCategory($int)
    {
        switch ($int) {
            case 1:
                return Book::TYPE_ONE;
            case 2:
                return Book::TYPE_TWO;
            case 3:
                return Book::TYPE_THREE;
            case 4:
                return Book::TYPE_FOUR;
            case 5:
                return Book::TYPE_FIVE;
            case 6:
                return Book::TYPE_SIX;
            case 7:
                return Book::TYPE_SEVEN;
            case 8:
                return Book::TYPE_EIGHT;
            default:
                return Book::TYPE_DEFAULT;
        }
    }

    public function getListBookByName($name)
    {
        return $this->model->where('name', 'like', '%' . $name . '%')->paginate($this->perPage);
    }
}
