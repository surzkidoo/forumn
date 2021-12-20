<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/bootstrap/css/bootstrap.min.css">
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
                <ul class="menu-container">
                    <li class="p-2  "> <a  href="http://127.0.0.1:8000/dashboard" class="p-2 dash-icon text-white text-decoration-none">1 Dashbord</a></li>
                    <li class="p-2">  <a href="http://127.0.0.1:8000/dashboard/user" class="p-2 dash-icon text-white text-decoration-none">2 User</a></li>
                    <li class="p-2"> <a  href="http://127.0.0.1:8000/dashboard/thread" class="p-2 dash-icon text-white text-decoration-none">3 Thread</a></li>
                    <li class="p-2  dash-active"> <a  href="http://127.0.0.1:8000/dashboard/category" class="p-2 dash-icon text-white text-decoration-none">3 Category</a></li>
                    <li class="p-2">  <a href="http://127.0.0.1:8000/logout" class="p-2 dash-icon text-white text-decoration-none">4 Logout</a></li>
                </ul>
                </ul>
            </div>
            <div id="display" class="col-md-7 col-lg-10 col-12 render">
                <div class="mt-5 ml-2row justify-content-center">
                <form class="mb-2" action="{{route('catcreate')}}" method="post">
                @csrf
                <input type="text" class="form-control col-4 d-inline" name="name" placeholder="Add Section" id="">
                <input type="submit" value="Create" class="btn btn-sm btn-primary">
                </form>
                   <div class="w-100 table-responsive">
                        <table class="table border">
                            <th>ID</th>
                            <th>Section name</th>
                            <th>Action</th>
                            @foreach($category as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{ucfirst($cat->category_name)}}</td>
                               
                                <td> <form action="{{route('catdelete',$cat->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                  <input type="submit" id='' value="delete" class="btn btn-sm btn-danger">
                                </form>  </td>
                            </tr>
                            @endforeach
                           
                        </table>
                   </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>