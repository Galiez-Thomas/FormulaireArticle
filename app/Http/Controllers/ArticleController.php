<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $categories = Category::all(['id','nomCat']);
        return view('article', compact('categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nameArticle' => 'bail|required|between:2,20|string',
            'nameCategory' => 'bail|required|between:2,20|string'
            ]);
        $article = new \App\Article;
        $article->nomArticle = $request->nameArticle;
        $article->nomCat = $request->nameCategory;
        $article->save();
        return view('confirmArticle');
    }
}
