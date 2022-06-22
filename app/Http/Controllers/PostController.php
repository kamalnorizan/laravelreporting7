<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DataTables;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        return view('posts.index');
    }

    public function ajaxLoadPostTable(Request $reqeust)
    {
        $posts = Post::with('user');

        return Datatables::of($posts)
        ->addIndexColumn()
        ->addColumn('name',function(Post $post){
            return $post->user->name;
        })
        // ->addColumn('bil',function(Post $post){
        //     return 'bil';
        // })
        ->addColumn('action',function(Post $post){
            $button = "<button type='button' class='btn btn-sm btn-warning'  data-toggle='modal' data-id='".$post->id."' data-target='#updatePostMdl'>Update</button> ";
            $button .= "<button type='button' class='btn btn-sm btn-primary'>Show</button>";
            return $button;
        })
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
