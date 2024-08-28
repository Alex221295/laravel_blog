<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): RedirectResponse
    {
        return redirect()->route('post.index');
    }
}
