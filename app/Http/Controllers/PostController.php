<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    public function ajaxLoadPostTableEL(Request $reqeust)
    {
        $posts = Post::with('user','comments');

        return Datatables::of($posts)
        ->addIndexColumn()
        ->addColumn('created_at',function(Post $post){
            return Carbon::parse($post->created_at)->format('d-m-Y');
        })
        ->addColumn('name',function(Post $post){
            return $post->user->name;
        })
        ->addColumn('featured',function(Post $post){
            return $post->featured;
        })
        ->addColumn('comment',function(Post $post){
            $commentRow = '';
            foreach ($post->comments as $key => $comment) {
                $commentRow.='<option >'.$comment->content.'</option>';
            }
            $columnComment = '<div class="form-group">';
            $columnComment ='<select class="form-control">';
            $columnComment .=$commentRow;
            $columnComment .='</select>';
            $columnComment .='</div>';
            return  $columnComment;
        })
        ->addColumn('calculate',function(){
            return rand(5,20)+rand(50,100);
        })
        ->addColumn('action',function(Post $post){
            $button = "<button type='button' class='btn btn-sm btn-warning'  data-toggle='modal' data-id='".$post->id."' data-target='#updatePostMdl'>Update</button> ";
            $button .= "<button type='button' class='btn btn-sm btn-primary'>Show</button>";
            return $button;
        })
        ->rawColumns(['comment','action'])
        ->make(true);
    }

    public function ajaxLoadPostTableQB(Request $reqeust)
    {
        // $posts = Post::with('user','comments');
        $posts = DB::table('posts')
        ->select('posts.id','title','posts.created_at','users.name','content')
        ->join('users','users.id','posts.user_id');

        return Datatables::queryBuilder($posts)
        ->addIndexColumn()
        ->addColumn('name',function($post){
            return $post->name;
        })
        ->addColumn('calculate',function($post){
            return rand(5,20)+rand(50,100);
        })
        ->addColumn('comment',function($post){
            // $commentRow = '';
            // foreach ($post->comments as $key => $comment) {
            //     $commentRow.='<option >'.$comment->content.'</option>';
            // }
            // $columnComment = '<div class="form-group">';
            // $columnComment ='<select class="form-control">';
            // $columnComment .=$commentRow;
            // $columnComment .='</select>';
            // $columnComment .='</div>';
            return  '$columnComment';
        })
        ->addColumn('action',function($post){
            $button = "<button type='button' class='btn btn-sm btn-warning'  data-toggle='modal' data-id='".$post->id."' data-target='#updatePostMdl'>Update</button> ";
            $button .= "<button type='button' class='btn btn-sm btn-primary'>Show</button>";
            return $button;
        })
        ->rawColumns(['comment','action'])
        // ->make(true);
        ->toJson();
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
        return response()->json($request);
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
