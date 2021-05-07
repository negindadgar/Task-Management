<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    $articles = Article::orderBy('id' , 'desc')->get();
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::prefix('admin')->group(function() {
    Route::get('/task' , function() {
        return view('admin.task.index' , [
            'task' => Article::all()
        ]);
    });
    Route::get('/task/create' , function() {

        return view('admin.task.create');
    });
    Route::post('/task/create',function() {

        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|min:10|max:50',
            'body' => 'required'
        ])->validated();


        Article::create([
            'title' => $validate_data['title'],
            'slug' => $validate_data['title'],
            'body' => $validate_data['body'],
        ]);

        return redirect('/admin/task/create');
    });
    Route::get('/task/{id}/edit' , function($id) {
        $article = Article::findOrFail($id);

        return view('admin.task.edit' , [
            'article' => $article
        ]);
    });
    Route::put('/task/{id}/edit' , function($id) {
        $validate_data = Validator::make(request()->all() , [
            'title' => 'required|min:10|max:50',
            'body' => 'required'
        ])->validated();

        $article = Article::findOrFail($id);

        $article->update($validate_data);

        return back();
    });
    Route::delete('/task/{id}' , function($id) {
        $article = Article::findOrFail($id);

        $article->delete();

        return back();
    });
});























    Route::get('/' , function() {
        return view('index' , [
            'articles' => Article::all()
        ]);
    });

