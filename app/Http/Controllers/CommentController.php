<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Museum;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index()
    {
        return view('comment.index',
    [
        'comments'=>Comment::all()
    ]);
    }
    public function create(){
        return view('comment.create',
    [
        'users'=>User::all(),
        'museums'=>Museum::all(),
    ]);
    }
    public function store(StoreCommentRequest $request)
    {
        Comment::create($request->validated());
        return redirect()->route('comment.index')
        -> with('message','Comment has been added ');
    }

    public function edit(Comment $comment)
    {
        return view('comment.edit',compact('comment'),
    [
        'users'=>User::all(),
        'museums'=>Museum::all(),
    ]);
    }

    public function update(UpdateCommentRequest $request, Comment $comment){
        $comment->update($request->validated());
        return redirect()->route('comment.index')
        -> with('message','Comment has been updated ');

    }

    public function trash($id)
    {
        Comment::Destroy($id);
        return redirect()->route('comment.index')-> with('message','Comment has been deleted ');
    }

    public function destroy(Comment $comment)
    {
        $comment = Comment::withTrashed()->where('id',$id)->first();
        $comment->forceDelete();
        return redirect()->route('comment.index');

    }

    public function restore($id)
    {
        $comment =Comment::withTrashed()->where('id',$id)->first();
        $comment->restore();
        return redirect()->route('comment.trashed');
    }
}
