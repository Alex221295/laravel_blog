<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PersonalIndexController extends Controller
{
    public function index() : View
    {
        return view('personal.main.index');
    }
}
