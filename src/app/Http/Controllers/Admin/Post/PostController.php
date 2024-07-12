<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends BaseController
{
    public function index(Post $post): View
    {

        $getPost = Post::get();
        return view('admin.post.index', compact('post', 'getPost'));
    }

    public function create(): View
    {
        $getCategories = Category::all();
        $getTags = Tag::all();

        return view('admin.post.create', compact('getCategories','getTags'));
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $dataValidation = $request->validated();
        $this->service->store($dataValidation);

        return redirect()->route('admin.post.index');
    }

    public function show(Post $post): View
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        $getCategories = Category::all();
        $getTags = Tag::all();

        return view('admin.post.edit', compact('post','getCategories','getTags'));
    }

    public function update(UpdateRequest $request,Post $post): View
    {
        $dataValidation = $request->validated();
        $post = $this->service->update($dataValidation,$post);

        return view('admin.post.show', compact('post'));
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
