<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function store(Post $post): RedirectResponse
    {
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
