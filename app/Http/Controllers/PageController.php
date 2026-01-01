<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $name = 'Ashok';
        return view('home', compact('name')); // ['name' => $name]
    }

    public function about(){
        $framework = 'Laravel';
        $topics = ['Routes', 'Controllers', 'Views'];
        return view('about', compact('framework', 'topics'));
    }
}
