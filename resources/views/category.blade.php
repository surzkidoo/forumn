@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
       
        <div class="row justify-content-center" >
        
            <div class="newsection  col-md-6 col-12 mr-2 mt-4">
                <div class="d-flex bg-white bs mb-1">
                    <div class="p-2   bg-warning">
                    <p class="d-block font-weight-bold">{{ucfirst($s_category->category_name)}}</p>
                    </div>
                    @auth
                    <div class="  ">
                    <a class="btn p-2 ml-1 mt-1 btn-warning  btn-sm" href="http://127.0.0.1:8000/post/create">+ ADD</a>
                    </div>
                    @endauth
                    
                    
                    
                </div>
                @foreach ($s_category->threads as $thread)
                <div class="post bg-white p-2 mb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            
                            <img src="{{asset('storage/'.$thread->user->avatar)}}" width="50px" height="50px" class="rounded-circle post-avatar" alt="">
                          
                            <span class="text-avatar"> By {{$thread->user->username}}</span>

                        </div>
                        <div class="d-inline-block float-right post-time">{{$thread->created_at->diffForHumans()}}</div>
                    </div>

                    <div>
                    <a class="text-dark" href="/post/{{$thread->id}}"> <h1 class="post-title d-inline-block">{{$thread->title}}</h1></a>

                        <span class="section-indicator">{{$s_category->category_name}}</span>
                    </div>
                    @if ($thread->cover_image)
                    <img src="{{asset('storage/'.$thread->cover_image)}}" class="p-2" width="100%" height="340px" alt="">
                      @endif
                    <div class="post-sum">
                    <span class="p-2 ">Comments {{ count($thread->comments)}}</span>
                    
                    </div>
              


                </div>
                @endforeach  
            </div>
            
        </div>
    </div>
@endsection