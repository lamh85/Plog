<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CommentsRequest;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CommentsRequest $request)
    {
        $comment = new Comment;
        $comment = Comment::create([
            'title'   => $request->input('title'),
            'body'    => $request->input('body'),
            'post_id' => $request->input('post_id')
        ]);

        return redirect('posts/' . $request->input('post_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post_id = Comment::find($id)->post->id;
        Comment::find($id)->delete();
        return redirect('posts/' . $post_id);
    }
}
