<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/login.css">
    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
     <div class="row container-1 justify-content-center align-items-center">
        <div class="col-12 col-sm-10  shadow col-md-8 col-lg-8  container2  p-4 rounded-lg">
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
            <h3 class="head">Register Now!</h3>
            <hr class="div">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                <div class="inputbox  rounded-lg mb-3 col-12 mx-auto pr-0">
                <span class="fa fa-user "></span>
                <input type="text" class="" name="name" value="{{old('name')}}" class="fname" placeholder="First Name" />
                @error('name')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="inputbox  rounded-lg mb-3 col-12 mx-auto pr-0">
            <span class="fa fa-user "></span>
                <input type="text" class="" name="lastname" value="{{old('lastname')}}" placeholder="Last Name" />
                @error('lastname')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="inputbox mb-3 rounded-lg  col-12 mx-auto pr-0">
            <span class="fa fa-user-circle "></span>
                <input type="text" class="" name="username" value="{{old('username')}}" placeholder="Choose username" />
                @error('username')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="inputbox  rounded-lg mb-3 col-12 mx-auto pr-0">
            <span class="fa fa-birthday-cake "></span>
                <input type="date" class="" name="dob" value="{{old('dob')}}" title="Date of Birth" placeholder="Date of Birth" />
                @error('dob')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="inputbox  rounded-lg mb-3 col-12 mx-auto pr-0">
            <span class="fa fa-book "></span>
                <input type="text" class="" name="course" value="{{old('course')}}" title="course of study" placeholder="Course of study" />
                @error('course')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="  rounded-lg mb-3 col-12 mx-auto pr-0">
              
                <label class="text-white ">Male
                <input type="radio" class="" name="gender" value="Male" title="gender" checked/>
                </label>
                
                <label class="text-white">Female
                     <input type="radio" class="" name="gender" value="Female" title="gender" />
                </label>
               
               
            </div>
            
        </div>

            <div class="col-12 col-md-6">
                    <div class="inputbox  rounded-lg mb-3 col-12 mx-auto pr-0">
                    <span class="fa fa-envelope"></span>
                <input type="email" name="email" value="{{old('email')}}" class="" placeholder="Email" />
                @error('email')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="inputbox mb-3 rounded-lg  col-12 mx-auto pr-0">
            <span class="fa fa-lock "></span>
                <input type="password" name="password" class="" placeholder="Password" />
                @error('password')
                <div class="text-danger danger-text">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="inputbox mb-3 rounded-lg  col-12 mx-auto pr-0">
            <span class="fa fa-lock "></span>
                <input type="password" name="password_confirmation" class="" placeholder="Again Password" />
            </div>
            <div>
                <small class="bg-white">Choose Profile Picture</small>
                <input type="file" class="btn col-12 text-white file" name="image" id=""   required>
            </div>
            <div class="checbox ">
                <input type="checkbox">
                <span class="rmtext">You have read and agreed to our terms and condition</span>
            </div>
            <span class="cacc mb-2">Already Have Account?<a href="http://127.0.0.1:8000/login " class="text-decoration-none"> Sign In</a></span> 
            <input class="submit rounded-lg" type="submit" value="SEND" style="background-color: #949494">
                    </div>
            </div>
            

            
            
    </form>
        </div>
    </div>   
    </div>
    
</body>
</html>