<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
        return view('genres.create', ['title' => 'New genre']);
    }

    public function store()
    {
        dd('it works');
    }
}
