<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function index()
    {
        $count = [
            'tagsCount' => Tag::count(),
        'categoriesCount' => Category::count(),
        'postsCount' => Post::count(),
        'usersCount' => User::count(),
        ];
        return view('admin.main.index', compact('count'));
    }
}
