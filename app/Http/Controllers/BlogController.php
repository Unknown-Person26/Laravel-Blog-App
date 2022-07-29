<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    // Index
    public function index(Request $request)
    {
        if ($request->search) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        } elseif ($request->category) {
            $posts = Category::where('name', $request->category)->firstOrFail()->posts()->paginate(4)->withQueryString();
        } else {
            $posts = Post::latest()->paginate(4);
        }
        $categories = Category::all();
        return view('frontpages.blogpages.index', compact('posts', 'categories'));
    }
    // Create blog post
    public function create()
    {
        $categories = Category::all();
        return view('backpages.blogpages.index', compact('categories'));
    }
    // Store blog post
    public function store(Request $request)
    {
        // validation data
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        // get the data
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        if (Post::latest()->first() !== null) {
            $postId = Post::latest()->first()->id + 1;
        } else {
            $postId = 1;
        }

        // $postId = Post::latest()->take(1)->first()->id + 1;
        // $postId = Post::latest()->first()->id + 1;
        $slug = Str::slug($title . '-') . '-' . $postId;
        $user_id = Auth::user()->id;
        $body = $request->input('body');

        // file upload
        $imagePath = 'storage/' . $request->file('image')->store('postImages', 'public');

        $post = new Post();
        $post->title = $title;
        $post->category_id = $category_id;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('condition', 'Post Created Successfully!');
    }

    public function edit(Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            abort(403);
        }
        return view('backpages.blogpages.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (auth()->user()->id !== $post->user_id) {
            abort(403);
        }
        // validation data
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        // get the data
        $title = $request->input('title');
        $postId = $post->id;
        $slug = Str::slug($title . '-') . '-' . $postId;
        $body = $request->input('body');

        // file upload
        $imagePath = 'storage/' . $request->file('image')->store('postImages', 'public');

        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->imagePath = $imagePath;

        $post->save();

        return redirect()->back()->with('condition', 'Post Edited Successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('condition', 'Post deleted Successfully!');
    }

    public function show(Post $post)
    {
        $category = $post->category;

        $relatedPosts = $category->posts()->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('frontpages.blogpages.blog', compact('post', 'relatedPosts'));
    }
}
