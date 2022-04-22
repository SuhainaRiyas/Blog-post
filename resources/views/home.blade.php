@extends('layouts.master')

@section('content')

 <section class="section profile">
  @if($errors->any())
    <div class="alert alert-danger">
       <ul> 
       @foreach($errors->all() as $error)
          <li class="text-danger">{{$error}}</li>
       @endforeach
       </ul>
     </div>
   @endif

      <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 col-12">

          

          <div class="card">
            <div class="card-body mt-3">
               <form class="form" method="post" action="{{route('post')}}">
                    @csrf
                                <div class="row">
                                                                       
																		<div class="col-lg-8 col-md-8 col-sm-12 col-12">
																			<div class="form-group">
																				<label><b>What I did interesting today?</b></label>
																				<textarea name="post" rows="6" class="form-control mt-3" placeholder="" required></textarea>
																			</div>
																		</div>
                                </div>
                                <div class="row mt-3">
																		<div class="col-lg-6 col-6">
																			<div class="form-group">	
																				<button type="submit" class="btn btn-primary">Submit</button>
																			</div>
																		</div>
																	</div>
								</form>

  

  <div class="mt-5">
    <div class="d-flex row">
        <div class="col-md-8 col-sm-12 col-12">
        @php
           $posts = App\Models\Post::orderby('id','desc')->get();
        @endphp
        @foreach($posts as $post)
            <div class="d-flex flex-column comment-section card" id="myGroup">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info">
                    <div class="learning-questions-img rgt-10">{{ $post->user->name[0] }}
                                                    </div> 
                    
                        <div class="d-flex flex-column justify-content-start ms-2">
                          <span class="d-block font-weight-bold name">{{ $post->user->name }}</span>
                          <span class="date text-black-50">{{ $post->created_at->diffForHumans() }}</span></div>
                    </div>
                    <div class="mt-2">
                        <p class="comment-text">{{ $post->post }}</p>
                    </div>
                </div>
                @php
                      $comments = App\Models\Comments::where('post_id', $post->id)->get();
                      if(count($comments)>0){
                            $comment_count= count($comments);
                      }
                      else{     
                        $comment_count=0;
                      }
                      $likes = App\Models\Likes::where('post_id', $post->id)->get();
                      $likesheart = App\Models\Likes::where('post_id', $post->id)->where('user_id', Auth::user()->id)->count();
                      if(count($likes)>0){
                            $likes_count= count($likes);
                      }
                      else{     
                        $likes_count=0;
                      }
                @endphp
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                 
                        <div class="like p-2  likediv"> 
                          @if($likesheart>0)
                          <i onclick="likepost({{$post->id}})" class="bi bi-heart-fill likepost{{$post->id}} cursor text-danger"></i>
                          @else
                          <i onclick="likepost({{$post->id}})" class="bi bi-heart likepost{{$post->id}} cursor text-danger"></i>
                          @endif
                          <span class="ms-1 likecount{{$post->id}}">{{$likes_count}}</span></div>
                        <div class="like p-2 cursor action-collapse" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-{{$post->id}}"> <i class="bi bi-chat-dots text-primary"></i><span class="ms-1">{{$comment_count}} Comments</span></div>
                    </div>
                </div>
                <div id="collapse-{{$post->id}}" class=" p-2 collapse" data-parent="#myGroup">
                <form id="demo-form2" method="post" action="{{ asset('comments') }}">
                   @csrf
                   <input type="hidden" name="post_id"  value="{{$post->id}}" />                                                       
                   
                  <div class="d-flex flex-row align-items-start">
                    <div class="learning-questions-img rgt-10">{{ $post->user->name[0] }}
                                                    </div>
                      <textarea class="form-control ms-1 shadow-none textarea" name="comment" required></textarea></div>
                    <div class="mt-2 text-end"><button class="btn btn-primary btn-sm shadow-none" type="submit">Post Comment</button></div>
                 
                 </form>
                  @foreach($comments as $comment)
                  <div class="d-flex flex-row user-info mt-3 ms-3">
                    <div class="learning-questions-img rgt-10">{{ $comment->user->name[0] }}
                                                    </div> 
                    
                        <div class="d-flex flex-column justify-content-start ms-2">
                          <span class="d-block font-weight-bold name">{{ $comment->user->name }}</span>
                          <span class="date text-black-50">{{ $comment->created_at->diffForHumans() }}</span></div>
                    </div>
                    <div class="mt-2" style="margin-left: 67px;">
                        <p class="comment-text">{{ $comment->comment }}</p>
                    </div>
                
                  @endforeach
                  </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

              
          </div>

        </div>
      </div>
    </section>
    <script  src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script type="text/javascript">
function likepost(post_id) {
    var user_id = '<?php echo Auth::user()->id ?>';

    $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
    		});
    $.ajax({
				url:'{{asset("likes")}}',
				type:'post',
				data:{user_id:user_id,post_id:post_id},
				success:function(data){	
          console.log(data);
          if(data == 'failure'){
            alert('You have already liked this post');
          }else{
             $('.likecount'+post_id).text(data);
             $('.likepost'+post_id).toggleClass("bi-heart bi-heart-fill");
          }
        }
		 	});
    
}
 
   	
		

</script>
@endsection



