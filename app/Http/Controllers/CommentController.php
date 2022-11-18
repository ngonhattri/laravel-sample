<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment([
            'user_id' => auth()->id(),
            'post_id' => $request->get('post_id'),
            'comment' => $request->get('comment'),
        ]);
        $comment->save();
        return back();
    }
}