<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $name = 'Ashok';
        return view('home', compact('name')); // ['name' => $name]
    }

    public function about()
    {
        $framework = 'Laravel';
        $topics = Topic::all();
        return view('about', compact('framework', 'topics'));
    }

    public function createTopic()
    {
        Topic::create([
            'name' => 'Eloquent'
        ]);
        return 'Topic Created';
    }
}
