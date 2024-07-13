<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/article/{slug}', [HomeController::class, 'show']);


//auth
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store-user', [AuthController::class, 'storeUser']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login-store', [AuthController::class, 'loginStore']);
// Route::post('/logout', [AuthController::class, 'logout']);

//dashboard
Route::group(['middleware' => 'checkLoggedIn'], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/dashboard', function(){
        return view('admin.pages.dashboard');
    });
    Route::group(['middleware' => 'checkIfAdmin'], function(){
        Route::get('/getAllUsers', [AuthController::class, 'getAllUsers']);
        Route::get('/delete-user/{id}', [AuthController::class, 'delete']);

        //categories
        Route::get('/create-category', [CategoryController::class, 'create']);
        Route::post('/store-category', [CategoryController::class, 'store']);
        Route::get('/getAllCategories', [CategoryController::class, 'getAllCategories']);
        Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
        Route::post('/update-category/{id}', [CategoryController::class, 'update']);
        Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);

        //articles
        Route::get('/create-article', [ArticleController::class, 'create']);
        Route::post('/store-article', [ArticleController::class, 'store']);
        Route::get('/getAllArticles', [ArticleController::class, 'getAllArticles']);
        Route::get('/getYourArticles', [ArticleController::class, 'getYourArticles']);
        Route::get('/edit-article/{id}', [ArticleController::class, 'edit']);
        Route::post('/update-article/{id}', [ArticleController::class, 'update']);
        
    });
    Route::group(['middleware' => 'checkIfEditor'], function(){
       

        //articles
        Route::get('/create-article', [ArticleController::class, 'create']);
        Route::post('/store-article', [ArticleController::class, 'store']);
        
        Route::get('/getYourArticles', [ArticleController::class, 'getYourArticles']);
        Route::get('/edit-article/{id}', [ArticleController::class, 'edit']);
        Route::post('/update-article/{id}', [ArticleController::class, 'update']);
        
    });
    
    
    
});

Route::get('/table', function(){
    return view('admin.pages.tables');
});