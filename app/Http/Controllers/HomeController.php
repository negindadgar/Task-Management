<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Mail\TestMail;
use App\User;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
       // dd(auth()->user());
        $articles=Article::orderBy('id','desc')->get();
        return view('index',compact('articles'));
    }
    public function index()
    {
        // return view('home');
    }
    public function about()
    {
        return view('about');
    }
}
