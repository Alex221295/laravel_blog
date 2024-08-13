<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CommentIndexController extends Controller
{
    public function index() : View
    {
        return view('personal.comment.index');
    }
}
