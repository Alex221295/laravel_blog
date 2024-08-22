<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CommentIndexController extends Controller
{
    public function index(): View
    {
        $getComments = auth()->user()->comments()->get();
        return view('personal.comment.index', compact('getComments'));
    }

    public function edit(Comment $comment): View
    {
        return view('personal.comment.edit',compact('comment'));
    }

    public function update(Comment $comment, UpdateRequest $request): RedirectResponse
    {
        $dataValidation = $request->validated();
        $comment->update($dataValidation);
        return redirect()->route('personal.comment.index');
    }

    public function delete(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
