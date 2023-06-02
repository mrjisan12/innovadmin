<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private  $gallery, $galleries;
    public function index()
    {
        $this->galleries = Gallery::all();
        return view('home.index', ['galleries' => $this->galleries]);
    }
}
