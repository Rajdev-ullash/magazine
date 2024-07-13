<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
         $articles_show_home_page = Article::where('show_home_page', true)->get();
         $featuredArticles = Article::where('features', true)->paginate(2);
        return view('user.pages.index', compact('articles','articles_show_home_page','featuredArticles'));
    }
    public function show($slug){
        $article = Article::where('slug', $slug)->first();
        $featuredArticles = Article::where('features', true)->get();
        $relatedArticles = Article::where('category_id', $article->category_id)->get();
       

        return view('user.pages.details', compact('article','featuredArticles','relatedArticles'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('others.contact');
    }
    public function news($cat){
        return view('others/news', compact('cat'));
    }
}