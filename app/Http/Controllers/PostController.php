<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::paginate(15);
        return view('dashboard.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $model)
    {
        return view('dashboard.posts.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'order' => 'required',
            'category_id' => 'required',
            'is_published' => 'required',
            'image' => 'required',

        ]);

        $post = Post::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/posts/' . $name);
            $post->image = 'uploads/posts/' . $name;
            $post->save();
        }

        flash()->success('success Adding post');
        return redirect('Dashboard/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Post::findOrFail($id);
        return view('dashboard.posts.edit', compact('model'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'order' => 'required',
            'category_id' => 'required',
            'is_published' => 'required',

        ]);
        $post = Post::findOrFail($id);
        $post->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/posts/' . $name);
            $post->image = 'uploads/posts/' . $name;
            $post->save();
        }
        flash()->success('success Editting post');
        return redirect('Dashboard/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        flash()->warning('success Deleting post');
        return back();
    }
}
