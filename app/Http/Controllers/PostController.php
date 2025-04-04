<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts  = Post::all();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => 'required|unique:posts,slug'
        ]);
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->slug
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request,Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content'=> 'required',
            'slug' => 'required|unique:posts,slug,'.$post->id
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->slug
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();

        return redirect()->route('posts.index')->with('success','Post deleted successfully.');
    }
}
