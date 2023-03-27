<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.sub-category.index');
    }
    public function create(Request $request)
    {
        return $request->all();
    }
    public function manage()
    {
        return view('admin.sub-category.manage');
    }
}
