<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;
use App\Models\Likes;
use Auth;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [            
            'post' => 'required',
        ]);

        Post::create([
            'user_id'=>Auth::user()->id,
            'post'=>$request->post
        ]);
        Session::flash('success','Post added successfully');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function comments(Request $request)
    {
        $this->validate($request, [            
            'comment' => 'required',
        ]);

        Comments::create([
            'user_id'=>Auth::user()->id,
            'post_id'=>$request->post_id,
            'comment'=>$request->comment
        ]);

        Session::flash('success','Comments added successfully');
        return redirect('home');
    }

    public function likes(Request $request)
    {
         $like = Likes::where('user_id',$request->user_id)->where('post_id',$request->post_id)->count();
              //return $like;
            if($like==0){
                Likes::create([
                    'user_id'=>$request->user_id,
                    'post_id'=>$request->post_id,            
                ]);

                $likes = Likes::where('post_id', $request->post_id)->get();
                      if(count($likes)>0){
                            $likes_count= count($likes);
                      }
                      else{     
                        $likes_count=0;
                      }
                
                return $likes_count;
            }else{
                return 'failure';
            }
    }
}
