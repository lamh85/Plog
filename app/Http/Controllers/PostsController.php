<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PostModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = PostModel::all();

        // The rails equilvalent is: @posts = Post.all
        return view('posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $post = new PostModel;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();
        $post = PostModel::create([
            'title' => $request->input('title'),
            'body'  => $request->input('body')
            ]);

        // return json_encode($request);
        // render    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
