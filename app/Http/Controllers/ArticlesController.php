<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    function index() {
        return view('pages.articles.index');
    }

    function show() {
        return view('pages.article.show');
    }
}
