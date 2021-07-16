<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowBookController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function singlebook()
    {
        return view('book_interface.book_interface');
    }
}
