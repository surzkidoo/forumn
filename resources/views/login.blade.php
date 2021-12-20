<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="login.css">

    <style>
    .container2 {
        background-color: #232949;
    }
    .submit {
        width: 100%;
        background-color: #949494;
        border: none;
        height: 45px;
    }
    
    </style>
</head>
<body>
    <div class="container">
     <div class="row container-1 justify-content-center align-items-center">
       
         
        <div class="col-12 col-sm-10  shadow col-md-5 col-lg-4  container2  p-4 rounded-lg">  @if(Session('acc'))
            <p class="text-success"> {{Session('acc')}}</p>
         @endif
         @if(Session('flash'))
            <p class="text-danger"> {{Session('flash')}}</p>
         @endif
            <form action="{{route('login')}}" method="post">
            <h3 class="head">Login</h3>
            <hr class="div">
            @csrf
            <div class="inputbox  rounded-lg mb-3 col-12 pr-0">
                <span class="fa fa-user "></span>
                <input type="text" name="email" class="" placeholder="Username or Email" required/>
            </div>
            <div class="inputbox mb-3 rounded-lg  col-12 pr-0">
            <span class="fa fa-lock "></span>
                <input type="password" name="password" class="" placeholder="Password" required/>
            </div>
            <div class="checbox ">
                <input name="remember" type="checkbox">
                <span class="rmtext">Remember me</span>
            </div>
            <span class="cacc">Not a Member?<a href="/register" class="text-decoration-none"> Register here</a> </span>
            <input class="submit  btn-sm rounded-lg" type="submit" value="Login">
            </form>
        </div>
    </div>   
    </div>
    
</body>
</html>