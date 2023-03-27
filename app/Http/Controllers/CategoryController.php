<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;

    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'Category info Create Successfully');
    }
    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }
}
