<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('admin.task.index',[
            'task' => Article::all()
        ]);
    }
    public function create(){
        return view('admin.task.create');
    }
    public function store(){


        $validate_data =$_REQUEST->validate();

        auth()->user()->articles()->create([
            'title' => $validate_data['title'],

            'body' => $validate_data['body'],

        ]);
        return redirect('/admin/task/create');
    }

    public function edit($id){


        return view('admin.task.edit' , [
            'article' => $article
        ]);
    }


    public function update(TaskRequest $request,Article $article){


        $validate_data=$request->validated();

              //     / /   اعتبارسنجی اطلاعات در کنترلرهاجلسه 37

        $article->update($validate_data);

        return back();
    }

    public function delete(Article $article){

        $article->delete();

        return back();

    }
}
