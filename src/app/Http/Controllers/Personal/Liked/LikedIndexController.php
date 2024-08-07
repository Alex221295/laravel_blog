<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class LikedIndexController extends Controller
{
    public function index() : View
    {
        return view('personal.liked.index');
    }
}
