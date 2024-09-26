<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function publicIndex()
    {
        return view ('frontend.publications.news.index');
    }

    public function publicShow($id)
    {
        return view('frontend.publications.news.show');
    }
}
