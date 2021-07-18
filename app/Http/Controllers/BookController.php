<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Book\BookRepository;
use App\Http\Requests\BookRequest;
use App\Models\Content;
use App\Models\Image;

class BookController extends Controller
{
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.manage_book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manage_book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\BookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        //create book
        $book = $request->only(
            'name',
            'auth',
            'quantity',
            'price',
            'year_start'
        );
        $book['category'] = $this->bookRepository->getTextCategory($request->category);
        if ($request->publisher) {
            $book['publisher'] = $request->publisher;
        }
        if ($request->translator) {
            $book['translator'] = $request->translator;
        }
        if ($request->country) {
            $book['country'] = $request->country;
        }
        $book['created_by'] = Auth::guard('admin')->id() ? Auth::guard('admin')->id() : 1;
        $bookNew = $this->bookRepository->create($book);
        //create content_book
        $content['content_book'] = $request->content;
        $content['book_id'] = $bookNew->id;
        $content['created_at'] = now();
        Content::insert($content);
        //create image mat trc
        $image1['book_id'] = $bookNew->id;
        $image1['type_face'] = 0;
        $image1['path'] = $request->image1;
        $image1['created_at'] = now();
        Image::insert($image1);
        //create image mat sau
        $image2['book_id'] = $bookNew->id;
        $image2['type_face'] = 1;
        $image2['path'] = $request->image2;
        $image2['created_at'] = now();
        Image::insert($image2);
        return redirect()->route('admin.book.index');
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
    public function edit($id)
    {
        return view('admin.manage_book.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
