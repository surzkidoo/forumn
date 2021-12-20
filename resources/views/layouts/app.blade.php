<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetForum</title>
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.css')}}">
    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('index.css')}}">
    <script src="jquery.js"></script>
    <script async="true" src="{{url('index.js')}}"></script>
    <script src="{{url('jquery-3.5.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .bg-warning{
            background-color: #232949!important;
        }
        .bg-dark {
            background-color: #949494 !important;
        }
        .post {
            box-shadow: 1px 2px 6px 2px rgb(197 193 193);
            border-radius: 20px;
        }
        .mb-2, .my-2 {
            margin-bottom: 1rem !important;
        }
        .text-center {
            text-align: center !important;
            padding: 1rem;
        }
        .mr-2, .mx-2 {
            margin-right: 0.5rem !important;
            border-radius: 20px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
            border-radius: 20px;
        }
        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            border-radius: 20px;
            max-width: 25%;
        }
    </style>
</head>



<body>
@yield('header')
<div class="container-fluid bg-dark  header2" style="">
        <ul class="category-container d-flex  " style="flex-wrap: nowrap;">
        @foreach($category as $cat)
        <a class="text-white" href="http://127.0.0.1:8000/category/{{$cat->category_name}}" ><li>{{ucfirst($cat->category_name)}}</li></a>  
          
            @endforeach
        </ul>

    </div>
    <div class="container-fluid  bg-warning ">
        <div class="row header align-items-center justify-content-between m-0">
            <div class="col-2 d-flex align-items-center justify-content-start ">


                <div class="text-info align-self-center"> <a href="/"><img src="{{url('logo.png')}}" alt="" style="width: 40px;"></a>
                </div>
            </div>
            <div class="col-0   header-search ">
                
                <form id="search" class="d-flex back p-0 m-0" action="{{route('search')}}">
                    <input class="search" type="search" name="query" id=""/>
                    <input type="submit" class="btns " value="Search"/>
                    <span id="close-search" class="p-1 text-danger d-none">x</span>
                    </form>

            



            </div>
            <div class="col-9 col-md-3 p-0">
                <div class="d-flex  align-items-center justify-content-end ">
                <li class="menuitem d-md-none mr-3"><button id="searchmobile" class="btn-sm btn btn-dark">Q</button></li>

                @if (!auth()->user())
                    <li class="menuitem "><a href="{{route('loginpage')}}" class="btn-sm btn btn-dark">LOGIN</a></li>
                    <li class="menuitem "><a href="{{route('register')}}" class="btn-sm btn btn-dark">REGISTER</a>
                
                @else
                    <li class="menuitem avartar p-0 m-0 mr-md-3"> <img src="{{asset('storage/'.auth()->user()->avatar)}}" alt="profile"  width="40px" height="40px"
                            class="rounded-circle  aimg" alt="">
                        <div class="pop bg-white shadow">
                            <ul class="">
                            <a class="text-dark text-decoration-none" href="http://127.0.0.1:8000/post/create"><li>New Post</li></a>
                               <a class="text-dark text-decoration-none" href="{{url('user', auth()->user()->id)}}"><li>Profile</li></a>
                               <a  class="text-dark text-decoration-none" href="{{route('logout')}}"> <li>Logout</li></a>
                            </ul>
                        </div>
                    </li>
               
                @endif
                </div>



            </div>
        </div>
    </div>

    
 
    @yield('content')
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

    $("#searchmobile").on("click",function(){
        $(".header-search").css("display","block");
        $("#close-search").removeClass("d-none");
    })
    
    $("#close-search").on("click",function(){
        $(".header-search").css("display","none");
    })
</script>
</html>