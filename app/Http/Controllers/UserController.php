<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Image;

class UserController extends Controller
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
        //
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
        $this->validate($request, [            
            'profile' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        
         //dd($im->path());
        
//dd($img);
        $user=User::find($id);

        $profile_img = $user->profile;

        if($request->profile != Null){
            if($profile_img){
                $img_file = public_path().'/users/'.$profile_img;
                //dd($img_file);
                if(is_file($img_file)){
                    unlink($img_file);
                }
            }
            $image = time().'.'.$request->profile->extension();
            //$request->profile->move(public_path('users/'),$image);
            $profile_img=$image;
//$img = Image::make('public/users/1646288941.jpg')->resize(320, 240)->insert('public/watermark.png');
             $destinationPath = public_path('/users');
          
              $im=$request->file('profile');
              $img = Image::make($im->path());
            $img->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
            })->save($destinationPath.'/'.$image);

        }
        
       $status= User::where('id',$id)->update([
            'phone'=>$request->phone,
            'area'=>$request->area,
            'street'=>$request->street,
            'city'=>$request->city,
            'state'=>$request->state,
            'country'=>$request->country,
            'pincode'=>$request->pincode,
            'profile'=>$profile_img
        ]);
      //dd($image);

       if($status){
         Session::flash('success','Profile updated successfully');
       }else{
         Session::flash('error','Please enter valid data');
       }

        return redirect('home');
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

    public function passwordchange(Request $request,$id){
          $request->validate([
              'currentpassword'=>'required',
              'newpassword'=>'required|min:8',
              'confirmpassword'=>['same:newpassword']
          ]);

          $user = User::find($id);

         $check= Hash::check($request->currentpassword,$user->password);
         if($check){
            $status=User::where('id',$id)->update(['password'=>Hash::make($request->newpassword)]);
            if($status){
              return redirect('/');
            }
         }else{
            Session::flash('error','Please enter valid password');
            return redirect('home');
         }



    }
}
