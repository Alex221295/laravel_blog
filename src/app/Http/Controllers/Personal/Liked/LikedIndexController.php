<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LikedIndexController extends Controller
{
    public function index(): View
    {
        $getPost = auth()->user()->likedPosts()->get();
        return view('personal.liked.index', compact('getPost'));
    }

    public function delete(Post $post): RedirectResponse
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
