<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index(Request $request)
    {
        $postQuery = Post::query();

        if ($request->filled('user_name')) {
            $postQuery->whereHas('user', function ($query) use ($request) {
                $query->where('first_name', 'like', "%" . $request->input('user_name') . "%");
            });
        }

        if ($request->filled('category')) {
            $postQuery->whereHas('category', function ($query) use ($request) {
                $query->where('name', 'like', "%" . $request->input('category') . "%");
            });
        }

        $posts = $postQuery->paginate(5);

        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('backend.posts.create', compact('categories', 'tags'));
    }


    public function store(StorePostRequest $request, Post $post)
    {
        
       
        $path = $request->file('photo')->store('post-photos/' . $post->id, 'public');

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path,
        ]);
        
        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }

        return redirect()->back();
    }


    public function show(Post $post)
    {
        $post = Post::find($post->id);

        return view('backend.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $post = Post::find($post->id);
        $tags = Tag::all();
        return view('backend.posts.edit')->with(['categories' => $categories, 'post' => $post, 'tags' => $tags]);
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        $posts = Post::all();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;

        if ($request->hasFile('photo')) {
            Storage::delete($post->image);

            $path = $request->file('photo')->store('post-photos/' . $post->id, 'public');

            $post->image = $path;
        }
        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        } else {
            // If no tags are selected, remove all existing tags
            $post->tags()->detach();
        }

        $post->save();

        return redirect()->back();
    }


    public function destroy(Post $post)
    {
        if (isset($post->image)) {
            Storage::delete($post->image);
        }

        $post->delete();

        return redirect()->back();
    }
}
