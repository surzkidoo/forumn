@extends('layouts.app')



    @section('content')
            <div class="newsection bg-white p-3 myshadow col-5 mx-auto mt-3 shadow p-4">
               <form action="{{route('newpost')}}" method="post" enctype="multipart/form-data">
               @csrf
                    <div class="row">
                
                        <label class="ft-14" for="title">Title</label>
                        <input type="text" class="col-12 form-control" name="title" id="title">
                    </div>
                    <div class="row">
                        <label class="ft-14" for="image">Post image</label>
                        <input type="file" class="col-12 ft-14" name="image" id="image" required>
                    </div>
                    <div class="row">
                        <label class="ft-14" for="content">Select Category</label>
                        <select class="col-12 form-control" name="category" id="">
                        @foreach ($categories as $p_category)
                            <option class="ft-14" value="{{$p_category->id}}">{{ucfirst($p_category->category_name)}}</option>
                        @endforeach
                        </select>
                        </div>
                    <div class="row">
                        <label class="ft-14" for="content">Content</label>
                        <textarea name="content" class="form-control"  id="" cols="30" rows="10"></textarea>  
                    </div>

                   <input type="submit" class="btn-primary btn mt-2" value="Submit">
                    
               </form>
            </div>
            <!-- <div class="col-2 bg-white align-self-stretch">
                <h1>ADVVERT SEC</h1>
            </div> -->
        </div>
    </div>
    @endsection
