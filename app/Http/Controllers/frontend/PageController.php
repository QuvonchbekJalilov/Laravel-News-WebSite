<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
{
    // Retrieve all posts
    $allPosts = Post::all();
    $onePost = Post::latest()->first();
    $lastTwoPosts = Post::latest()->skip(1)->take(2)->get();
    $twoPosts = Post::latest()->skip(3)->take(2)->get();
    $allPosts = Post::latest()->take(15)->get();
    
    $categories = Category::all();

    $postsByCategory = [];

    foreach ($categories as $category) {
        $posts = Post::where('category_id', $category->id)
                     ->latest()
                     ->take(4)
                     ->get();

        $postsByCategory[$category->name] = $posts;
    }

    // Initialize an array to hold post IDs and their corresponding view counts
    $postViewCounts = [];

    // Loop through all posts to populate the $postViewCounts array
    foreach ($allPosts as $post) {
        $viewCount = session('view_count_' . $post->id, 0);
        $postViewCounts[$post->id] = $viewCount;
    }

    // Sort the posts based on their view counts in descending order
    arsort($postViewCounts);

    // Limit the sorted array to the top 4 posts (assuming your section displays 4 posts)
    $topPostsIds = array_slice(array_keys($postViewCounts), 0, 4);

    // Retrieve the actual top posts from the database based on their IDs
    $popular_posts = Post::whereIn('id', $topPostsIds)->get();

    return view('frontend.pages.home', [
        'popular_posts' => $popular_posts,
        'one_post' => $onePost,
        'last_two_posts' => $lastTwoPosts,
        'two_posts' => $twoPosts,
        'posts_by_category' => $postsByCategory,
        'allPosts' => $allPosts,

    ]);
}


    

    public function category_page($category)
    {
        $allPosts = Post::latest()->take(15)->get();

        $posts =  Post::where('category_id', $category)->paginate(6);
        $latestPosts = Post::latest()->take(3)->get();
        return  view('frontend.pages.lifestyle', ['posts' => $posts, 'latestPosts' => $latestPosts, 'allPosts' => $allPosts]);
    }

    public function back()
    {
        if (!auth()->check()) {
            return view('auth.login');
        } elseif (auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) {
            return view('backend.dashboard');
        } else {
            return view('auth.errorpage');
        }
    }

    public function single_post($post)
{
    $single_post = Post::find($post);
    $latestPosts = Post::latest()->take(5)->get();
    $categories = Category::all();
    $tags = Tag::all();
    $allPosts = Post::latest()->take(15)->get();

    // Check if the post has been viewed in the current session
    if (!session()->has('viewed_post_' . $single_post->id)) {
        // If not viewed, mark it as viewed and increment the view count
        session(['viewed_post_' . $single_post->id => true]);
        // Optionally, you can increment a session-based view count as well
        session(['view_count_' . $single_post->id => session('view_count_' . $single_post->id, 0) + 1]);
    }

    // Pass the post data and view count to the view
    return view('frontend.pages.single_post', [
        'post' => $single_post,
        'latestPosts' => $latestPosts,
        'categories' => $categories,
        'tags' => $tags,
        'allPosts' => $allPosts,
        'view_count' => session('view_count_' . $single_post->id, 0) // Retrieve the session-based view count
    ]);
}


    public function tag_post($tag)
    {

        $tags_post = Tag::find($tag)->posts()->paginate(3);
        $latestPosts = Post::latest()->take(5)->get();
        $categories = Category::all();
        $tags = Tag::all();
        $allPosts = Post::latest()->take(15)->get();

        return view('frontend.pages.tag_post', [
            'tags_post' => $tags_post, 
            'latestPosts' => $latestPosts,
            'categories' => $categories,
            'tags' => $tags,
            'allPosts' => $allPosts
        ]);
    }
}
