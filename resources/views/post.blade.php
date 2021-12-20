@extends('layouts.app')



@section('content')


    <div class="overlay">
        <div class="post-comment d-flex justify-content-center align-items-center flex-column p-4 rounded-lg" >
            <div class="cancel text-danger align-self-end ">
               x
            </div>
                <form action="{{route('addcomment')}}" method="post">
                @csrf
                   <textarea name="content" id="" cols="40" rows="16" class="ft-14"  placeholder="Type here..." required></textarea>
                   <input type="hidden" name="thread_id" value="{{$thread->id}}">
                   <input id="q" type="hidden" name="q" value="">
                   <input type="submit" class="btn btn-sm btn-primary mt-2" name="Post" value="post">
                </form>
        </div>
    </div>
    <div class="container-fluid mt-4  ">
        <div class="row justify-content-center">
            
            <div class="newsection  col-md-6 col-12 ">
          
                <div class="headeroption bg-white mb-3 p-2 myshadow">
                    <div>
                    <img src="{{asset('storage/'.$thread->user->avatar)}}" width="60px" height="60px" class="rounded-circle mb-1" alt="avatar">
                    <span class="text-avatar">{{$thread->user->username}}</span>
                        <h1 class="post-title d-inline-block">{{$thread->title}}</h1>
                        <span class="section-indicator">{{$thread->category->category_name}}</span>
                    </div>
                    <div>
                    {{$thread->content}}
                    </div>
                       <span class="fa fa-clock-o gray ft-12"> {{$thread->created_at->diffForHumans()}}</span >
                </div>
              
                @foreach ($comments as $comment)

                <div class="post bg-white p-3 mb-2">
                    @if($comment->parent)
                    <div class="post bg-white rounded-lg p-1">
                        <div class="qoute-reply d-flex flex-column bg-dark text-white   rounded-lg p-2">
                            <div class="mr-2 d-flex align-items-center">
                            <a class="text-decoration-none" href="{{url('user/'.$comment->parent->user->id)}}">
                                <img src="{{asset('storage/'.$comment->parent->user->avatar)}}" width="40px" height="40px" class="rounded-circle" alt="">
                                <span class="text-avatar text-white">~{{$comment->parent->user->username}}</span>
                            </a>
                            </div>


                            <div class="d-inline-block float-right  post-content">{{$comment->parent->content}}
                                </div>
                        </div>



                    </div>
                    @endif
                    <div class="mt-2 d-flex text-center justify-content-between align-items-center">
                        <div>   
                        <a class="text-decoration-none" href="{{url('user/'.$comment->user->id)}}">
                              <img src="{{asset('storage/'.$comment->user->avatar)}}" width="50px" height="50px" class="rounded-circle post-avatar" alt="">
                             <span class="text-avatar">{{$comment->user->username}}</span>
                        </a>
                        </div>
                      

                        <div class="d-inline-block float-right post-time">{{$comment->created_at->diffForHumans()}}</div>
                    </div>

                    <p class="post-content ">{{$comment->content}}</p>
                @auth
                  <div class="com-sec">
                        <span id='{{$comment->id}}' class="reply-btn">reply</span>
                  </div>
                @endauth


                </div>
                @endforeach

                {{$comments->links()}}
               <div class="mb-2"></div>
               @auth
                <div class=" addcomment d-flex align-items-center justify-content-center text-white btn btn-success">+
                </div>
                @endauth
            </div>
          
        </div>
    </div>@endsection
</body>

<script>
    $(".addcomment").on("click",function(){
        $(".overlay").css("display","flex");
    })
    $(".reply-btn").on("click",function(){
        $(".overlay").css("display","flex");
        $('#q').attr('value',this.id);
    })

    $(".cancel").on("click",function(){
        $(".overlay").css("display","none");
    })
</script>
</html>