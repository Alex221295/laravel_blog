<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category): View
    {

        $getCategory = Category::get();
        return view('admin.category.index', compact('category', 'getCategory'));
    }

    public function create(): View
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }

    public function show(Category $category): View
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateRequest $request,Category $category): View
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.category.show', compact('category'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
