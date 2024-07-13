<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImages;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ArticleController extends Controller
{
    //

    public function create(){
        $categories = DB::table('categories')->select('id','name')->get();
        return view('admin.pages.article.create', compact('categories'));
    }

    public function store(Request $request)
{
    //user is
    $user_id =  $request->session()->get('userid');
    
    $validate = $request->validate([
        'title' => 'required|string',
        'category' => 'required|exists:categories,id',
        'short_des' => 'required|string',
        'details' => 'required',
        'main_image' => 'required|image|mimes:jpeg,png,jpg|max:7168',
        'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg|max:7168',
        'writer' => 'required|string',
        'show_home_page' => 'boolean',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:7168',
        'captions.*' => 'string|nullable',
        'features' => 'required|boolean',
    ]);

    // Main image upload
    $main_image_file = $request->file('main_image');
    $main_image_name = Str::slug($request->title) . '-' . time() . '.' . $main_image_file->getClientOriginalExtension();
    $main_image_path = 'admin/images/main_image';
    $main_image_file->move(public_path($main_image_path), $main_image_name);
    $main_imagePath = $main_image_path . '/' . $main_image_name;

    // Thumbnail image upload
    $thumbnail_image_file = $request->file('thumbnail_image');
    $thumbnail_image_name = Str::slug($request->title) . '-' . time() . '.' . $thumbnail_image_file->getClientOriginalExtension();
    $thumbnail_image_path = 'admin/images/thumbnail_image';
    $thumbnail_image_file->move(public_path($thumbnail_image_path), $thumbnail_image_name);
    $thumbnail_imagePath = $thumbnail_image_path . '/' . $thumbnail_image_name;
    

    

    // Create the article
    $article = Article::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'category_id' => $request->category,
        'short_description' => $request->short_des,
        'details' => $request->details,
        'main_image' => $main_imagePath,
        'thumbnail_image' => $thumbnail_imagePath,
        'writer' => $request->writer,
        'publish_date' => Carbon::now(),
        'status' => false,
        'show_home_page' =>$request->show_home_page,
        'features' =>$request->features,
        'user_id' =>$user_id
    ]);

    

    // Multiple images upload
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image_file) {
            $image_name = Str::slug($request->title) . '-' . time() . '-' . $index . '.' . $image_file->getClientOriginalExtension();
            $image_path = 'admin/images/articles';
            $image_file->move(public_path($image_path), $image_name);
            $image_path = $image_path . '/' . $image_name;

            ArticleImages::create([
                'article_id' => $article->id,
                'image_path' => $image_path,
                'caption' => $request->captions[$index] ?? null,
            ]);
        }
    }

    return redirect('/getYourArticles');
}

    public function getAllArticles(){
        $articles = Article::with('category', 'images')->get();

        return view('admin.pages.article.all', compact('articles'));
    }
    public function getYourArticles(){
        $user_id = session()->get('userid');

        $articles = Article::with('category', 'images')->where('user_id','=',$user_id)->get();
        
        return view('admin.pages.article.your', compact('articles'));
    }

   public function edit($id)
{
    // Retrieve the article by its ID
    $article = Article::findOrFail($id);

    // Retrieve all categories
    $categories = Category::all();

    // Retrieve all images associated with the article
    $images = ArticleImages::where('article_id', $id)->get();

    // Pass the article, categories, and images to the view
    return view('admin.pages.article.edit', compact('article', 'categories', 'images'));
}
    public function update(Request $request, $id)
{
    $user_id =  $request->session()->get('userid');
    // Validate the request
    $validate = $request->validate([
        'title' => 'required|string',
        'category' => 'required|exists:categories,id',
        'short_des' => 'required|string',
        'details' => 'required',
        'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max:7168',
        'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg|max:7168',
        'writer' => 'required|string',
        'status' => 'boolean',
        'show_home_page' => 'boolean',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:7168',
        'captions.*' => 'string|nullable',
        'features' => 'boolean',
    ]);

    // Retrieve the article
    $article = Article::findOrFail($id);

    // Update article data
    $article->title = $request->title;
    $article->slug = Str::slug($request->title);
    $article->category_id = $request->category;
    $article->short_description = $request->short_des;
    $article->details = $request->details;

    if ($request->hasFile('main_image')) {
        // Main image upload
        $main_image_file = $request->file('main_image');
        $main_image_name = Str::slug($request->title) . '-' . time() . '.' . $main_image_file->getClientOriginalExtension();
        $main_image_path = 'admin/images/main_image';
        $main_image_file->move(public_path($main_image_path), $main_image_name);
        $article->main_image = $main_image_path . '/' . $main_image_name;
    }

    if ($request->hasFile('thumbnail_image')) {
        // Thumbnail image upload
        $thumbnail_image_file = $request->file('thumbnail_image');
        $thumbnail_image_name = Str::slug($request->title) . '-' . time() . '.' . $thumbnail_image_file->getClientOriginalExtension();
        $thumbnail_image_path = 'admin/images/thumbnail_image';
        $thumbnail_image_file->move(public_path($thumbnail_image_path), $thumbnail_image_name);
        $article->thumbnail_image = $thumbnail_image_path . '/' . $thumbnail_image_name;
    }

    if ($request->hasFile('images')) {
    foreach ($request->file('images') as $index => $image) {
        if ($image) {
            // Handle new image upload
            $image_name = Str::slug($request->title) . '-' . time() . '-' . $index . '.' . $image->getClientOriginalExtension();
            $image_path = 'admin/images/articles';
            $image->move(public_path($image_path), $image_name);
            $image_path = $image_path . '/' . $image_name;

            // Save new image details to ArticleImages model
            ArticleImages::create([
                'article_id' => $article->id,
                'image_path' => $image_path,
                'caption' => $request->input('captions.' . $index),
            ]);
        }
    }
}


    $article->writer = $request->writer;
    $article->status = $request->boolean('status');
    $article->show_home_page = $request->boolean('show_home_page');
    $article->features = $request->boolean('features');
    $article->user_id = $user_id;
    $article->save();

    return redirect('/getYourArticles');
}
}