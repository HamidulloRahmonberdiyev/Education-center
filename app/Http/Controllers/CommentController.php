<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comments_store(StoreCommentRequest $request)
    {
        $comment = Comment::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
