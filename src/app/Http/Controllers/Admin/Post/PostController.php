<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Post $post): View
    {

        $getPost = Post::get();
        return view('admin.post.index', compact('post', 'getPost'));
    }

    public function create(Category $category): View
    {
        $getCategory = Category::get();
        return view('admin.post.create', compact('category','getCategory'));
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['main_image'] = Storage::put('/image', $data['main_image']);
        $data['preview_image'] = Storage::put('/image', $data['preview_image']);
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post): View
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(UpdateRequest $request,Post $post): View
    {
        $data = $request->validated();
        $post->update($data);
        return view('admin.post.show', compact('post'));
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
