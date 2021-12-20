@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
           
           
            <div class="newsection  col-12 col-md-6 ">
            <p>Search result for '{{$query}}'</p>
             @foreach ($results as $thread)
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
                    
</div>
                @endforeach

                {{$results->links()}}
               
            </div>
           
        </div>
    </div>
@endsection
