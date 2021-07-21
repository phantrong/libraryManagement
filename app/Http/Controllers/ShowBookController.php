<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Book\BookRepository;

class ShowBookController extends Controller
{
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function welcome(Request $request)
    {
        $category = -1;
        $name = '';
        $sort = -1;
        $fillter = [];
        if ($request->get('category') != -1 && $request->get('category') != null) {
            $fillter['category'] = $this->bookRepository->getTextCategory($request->category);
            $category = $request->get('category');
        }
        if ($request->get('name')) {
            $fillter['name'] = $request->get('name');
            $name = $request->get('name');
        }
        if ($request->get('sort') != null) {
            $fillter['sort'] = $request->get('sort');
            $sort = $request->get('sort');
        }
        $books = $this->bookRepository->getListBook($fillter);
        return view('welcome', [
            'books' => $books,
            'category' => $category,
            'name' => $name,
            'sort' => $sort
        ]);
    }

    public function singlebook(Request $request, $id)
    {
        $book = $this->bookRepository->find($id);
        if (!$book) {
            return abort(404);
        }
        $listbook = $this->bookRepository->getListBookByCategory($book->category);
        return view('book_interface.book_interface', [
            'book' => $book,
            'listbook' => $listbook,
        ]);
    }
}
