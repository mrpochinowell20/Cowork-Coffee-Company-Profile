<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    private function getArticles()
    {
        // return Article::where('is_draft', false)->take(3)->get();
    }
    public function client()
    {
        return view('index');
    }
    public function menu()
    {
        return view('menu');
    }
    public function workspace()
    {
        return view('workspace');
    }
    public function about()
    {
        return view('about');
    }
}
