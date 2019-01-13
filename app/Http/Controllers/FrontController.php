<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests;


class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published',0)->get();
        $categories = Category::all();
        return View('posts', compact('posts', 'categories'));
    }
    public function post($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return View('post_details', compact('post', 'categories'));

    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        return View('categories', compact('category', 'categories'));

    }



    }
