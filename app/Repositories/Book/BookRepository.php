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
            $books = $books->where('category', $fillter['category']);
        }
        if (array_key_exists('name', $fillter)) {
            $books = $books->where('name', 'like', '%' . $fillter['name'] . '%');
        }
        if (array_key_exists('sort', $fillter)) {
            if ($fillter['sort']) {
                $books = $books->orderBy('name');
            } else {
                $books = $books->orderByDesc('name');
            }
        }
        $books = $books->orderByDesc('updated_at')->paginate($this->perPage);
        return $books;
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

    public function getIndexCategory($text)
    {
        switch ($text) {
            case Book::TYPE_ONE:
                return 1;
            case Book::TYPE_TWO:
                return 2;
            case Book::TYPE_THREE:
                return 3;
            case Book::TYPE_FOUR:
                return 4;
            case Book::TYPE_FIVE:
                return 5;
            case Book::TYPE_SIX:
                return 6;
            case Book::TYPE_SEVEN:
                return 7;
            case Book::TYPE_EIGHT:
                return 8;
            default:
                return 0;
        }
    }

    public function getListBookByName($name)
    {
        return $this->model->where('name', 'like', '%' . $name . '%')->paginate($this->perPage);
    }

    public function getListBookByCategory($category)
    {
        return $this->model->where('category', $category)->paginate(6);
    }
}
