<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
        ]);

        $request->merge([
            'article_id' => $id,
        ]);

        Comment::create($request->all());
        return back();
    }
}
