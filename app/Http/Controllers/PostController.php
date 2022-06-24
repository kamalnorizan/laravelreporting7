<?php

namespace App\Http\Controllers;

use App\Post;
use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use DB;
use Carbon\Carbon;
use Validator;
use Auth;
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
        $posts = Post::with('user','comments')->orderBy('created_at','desc');

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

            $button .= "<button type='button' class='btn btn-sm btn-primary showid'  data-id='".$post->id."'>Show</button>";

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
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required',
            'featured' => 'required',
            'published' => 'required'
        ],[
            'title.required' => 'Sila masukkan tajuk'
        ]);

        if($validator->passes()){
            $post = new Post;
            $post->title=$request->title;
            $post->content=$request->content;
            $post->featured=$request->featured;
            $post->published=$request->published;
            $post->user_id=Auth::user()->id;
            $post->save();
            return response()->json($request);
        }else{
            return response()->json(['error'=>$validator->errors()]);
        }

    }

    public function lesen()
    {
        $users = User::limit(10)->get();
        return view('surat.lesen',compact('users'));
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

    public function report($size, $perpage)
    {
        $total = $size;
        if($size=='all'){
            $posts = Post::orderBy('created_at','desc')->get();
        }else{
            $posts = Post::limit($size)->orderBy('created_at','desc')->get();
        }
        $postsSplit = $posts->chunk($perpage);

        // $balance = 150%20;
        // $postsLast = $posts->take(-1*$balance)->split(1);
        // $postsToSplit = $posts->take(150-$balance);
        // $postsSplit = $postsSplit->combine($postsLast);
        // dd($postsSplit);

        return view('posts.report',compact('posts','postsSplit','perpage'));
    }

    public function reportDataTable(Request $request)
    {
        $ids = $request->ids;
        $collect = explode('|',$ids);
        $collect = array_slice($collect,1,sizeof($collect));
        $posts = Post::whereIn('id',$collect)->get();

        return view('surat.lesen2',compact('posts'));
        # code...
    }

    public function loadChartDashboard(Request $request)
    {
        $data['label']=["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];

        $appointments = Appointment::selectRaw("category, day, count(*) as total")
                                        ->groupBy('category')
                                        ->groupBy('day')
                                        ->orderBy('category','asc')
                                        ->orderBy('day','asc')
                                        ->get();
        $data['Appointment']=[40, 60, 80, 60, 75, 60, 70];
        $data['Fulfilled']=[70, 75, 90, 60, 80, 75, 65];
        $data['Booked']=[60, 65, 80, 62, 90, 80, 70];
        $data['Arrived']=[42, 45, 65, 40, 42, 63, 35];
        $data['NoShow']=[50, 55, 70, 40, 47, 65, 38];
        $data['Reschedule']=[40, 40, 45, 45, 45, 40, 45];

        foreach ($appointments as $key => $appointment) {
            switch ($appointment->day) {
                case 'MON':
                    $data[str_replace(' ','',$appointment->category)][0]=$appointment->total;
                    break;
                case 'TUE':
                    $data[str_replace(' ','',$appointment->category)][1]=$appointment->total;
                    break;
                case 'WED':
                    $data[str_replace(' ','',$appointment->category)][2]=$appointment->total;
                    break;
                case 'THU':
                    $data[str_replace(' ','',$appointment->category)][3]=$appointment->total;
                    break;
                case 'FRI':
                    $data[str_replace(' ','',$appointment->category)][4]=$appointment->total;
                    break;
                case 'SAT':
                    $data[str_replace(' ','',$appointment->category)][5]=$appointment->total;
                    break;
                case 'SUN':
                    $data[str_replace(' ','',$appointment->category)][6]=$appointment->total;
                    break;

            }

        }

        // dd($data);

        return response()->json($data);
    }
}
