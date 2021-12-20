@extends('layouts.app')


@section('content')
    <div class="container mt-4 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3  Sidebar    align-self-start mb-4">
                
                <div class="category p-0 bg-white myshadow col-12 ">
                    <h5 id="trending" class="trending" style="background-color: #232949 !important; color:white;">#TRENDING</h5>
                    <ul class="p-2 ">
                        @foreach($trends as $trend)
                        <li class=""> <a class='text-dark text-decoration-none' href="/post/{{$trend->id}}">{{$trend->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
               
            </div>
           
            <div class="newsection  col-12 col-md-5 ">
             @foreach ($threads as $thread)
                <div class="post bg-white p-2 mb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a class="text-decoration-none" href="{{url('user/'.$thread->user->id)}}">
                            <img src="{{asset('storage/'.$thread->user->avatar)}}" width="50px" height="50px" class="rounded-circle post-avatar" alt="">
                            <span class="text-avatar"> By {{$thread->user->username}}</span>
                            </a>

                        </div>
                        <div class="d-inline-block float-right post-time">{{$thread->created_at->diffForHumans()}}</div>
                    </div>

                    <div>
                       <a class="text-dark" href="/post/{{$thread->id}}"> <h1 class="post-title d-inline-block">{{$thread->title}}</h1></a>
                        <span class="section-indicator">{{$thread->category['category_name']}}</span>
                    </div>
                    @if($thread->cover_image)
                    <img src="{{asset('storage/'.$thread->cover_image)}}" class="p-2" width="100%" height="340px" alt="">
                    @endif
                    <div class="post-sum">
                    <span class="fa fa-comment-o ft-10 "> {{ count($thread->comments)}}</span>
                    
                   </div>
</div>
                @endforeach

                {{$threads->links()}}
               
            </div>
            <div class="col-3 bg-white align-self-start myshadow">
                <h1> SEC</h1>
            </div>
        </div>
    </div>
@endsection
