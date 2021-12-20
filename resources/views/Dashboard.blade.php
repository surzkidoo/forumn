<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('dindex.css')}}">
</head>
<body>
    <header>
        
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2   d-md-block m-0 p-0 dash ">
                
                <input type="checkbox" class="float-right" name="" id="rad">
                <div class="">
                  <h5 class="text-white p-3">ADMIN</h5>
                    
                </div>
                <ul class="menu-container">
                    <li class="p-2  dash-active"> <a  href="http://127.0.0.1:8000/dashboard" class="p-2 dash-icon text-white text-decoration-none">1 Dashbord</a></li>
                    <li class="p-2">  <a href="http://127.0.0.1:8000/dashboard/user" class="p-2 dash-icon text-white text-decoration-none">2 User</a></li>
                    <li class="p-2"> <a  href="http://127.0.0.1:8000/dashboard/thread" class="p-2 dash-icon text-white text-decoration-none">3 Thread</a></li>
                    <li class="p-2"> <a  href="http://127.0.0.1:8000/dashboard/category" class="p-2 dash-icon text-white text-decoration-none">3 Category</a></li>
                    <li class="p-2">  <a href="http://127.0.0.1:8000/logout" class="p-2 dash-icon text-white text-decoration-none">4 Logout</a></li>
                </ul>
            </div>
            <div id="display" class="col-md-7 col-lg-10 col-12 render">
                <div class="mt-5 row ">
                    <div class="bg-success col-3 m-2 py-4 text-center rounded-lg overall">
                        <h5>Registered Users</h5>
                        <h6>{{count($user)}}</h6>
                    </div>

                    <div class="bg-primary text-white col-3 m-2 py-4 text-center rounded-lg overall">
                        <h5>Posts</h5>
                        <h6>{{count($thread)}}</h6>
                    </div>
                    <div class="bg-danger text-white col-3 m-2 py-4 text-center rounded-lg overall">
                        <h5>Comments</h5>
                        <h6>{{count($comment)}}</h6>
                    </div>
                    <div class="bg-info text-white col-3 m-2 py-4 text-center rounded-lg overall">
                        <h5>Categories</h5>
                        <h6>{{count($category)}}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>