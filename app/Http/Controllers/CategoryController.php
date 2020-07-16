<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['nameCategory' => 'bail|required|between:2,20|string']);
        $category = new \App\Category;
        $category->nomCat = $request->nameCategory;
        $category->save();
        return view('confirmCategory');
    }
}
