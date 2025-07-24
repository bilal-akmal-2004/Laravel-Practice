<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $posts = [
            ['title' => 'Learn Laravel Blade', 'slug' => 'learn-laravel-blade'],
            ['title' => 'Mastering Routing', 'slug' => 'mastering-routing']
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('blog.single', compact('slug'));
    }
}
