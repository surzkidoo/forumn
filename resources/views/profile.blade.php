@extends('layouts.app')


@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-3 Sidebar ml-5 mr-2 bg-white  align-self-start py-2 myshadow">

                <div class=" d-flex flex-column">
                    <img src="{{asset('storage/'.$user->avatar)}}" width="180px" height="180px" class="rounded-circle d-block align-self-center"
                        alt="">
                  

                    <h5 class="font-weight-bold text-center ">{{$user->name}} {{$user->lastname}}</h5>
                    <div>
                        <span class="font-weight-bold label">@ {{ucfirst($user->username)}}</span>
                    </div>
                    <div>
                        <span class="font-weight-bold label">Course: {{ucfirst($user->course)}}</span>
                    </div>
                    <div>
                        <span class="font-weight-bold label">Gender: {{ucfirst($user->gender)}}</span>
                    </div>
                    <div>
                        <span class="font-weight-bold label">Member: since {{{$user->created_at->diffForHumans()}}}</span>
                    </div>
                    <div>
                        <span class="font-weight-bold label">Email: {{ucfirst($user->email)}}</span>
                    </div>
                   
                </div>
            </div>
            <div class="col-5 mr-2 ">
                <div class=" bg-white mb-3 p-2 myshadow">
                    <h5 class="header-bio ">Status</h5>
                    <p>
                       GOD IS GREAT.
                    </p>
                </div>
                <div class="bg-white mb-3 p-2 myshadow">
                    <h5 class="header-bio">My Post</h5>
                    <div class="post-container ">

                    @foreach ($user->threads as $thread)
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
                    <span class="p-2 ">Comments {{ count($thread->comments)}}</span>
                    
                   </div>
</div>
                    @endforeach

                </div>
                </div>
           
            </div>
            <div class="col-3 bg-white p-2 myshadow">
                <h4 class="header-bio">Active IN</h4>
                <div class="tagcontainer">
                    <div>
                        <span class="tag p-1 mb-1 ">how to make money onspanne </span><span
                            class="btn  btn-sm btn-danger">D</span>
                    </div>

                    <div>
                        <span class="tag p-1 mb-1 ">how to make money onspanne Lorem, ipsum.</span><span
                            class="btn  btn-sm btn-danger">D</span>
                    </div>



                </div>
            </div>
        </div>
    </div>@endsection
</body>

</html>