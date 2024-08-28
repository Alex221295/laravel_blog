<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('post.index' , compact('posts', 'randomPosts','likedPosts'));
    }

    public function show(Post $post): View
    {
        $date = Carbon::parse($post->created_at);
        return view('post.show' , compact('post', 'date'));
    }
}
