@extends('layouts.master')

@section('content')
<style>.g {background-color: #a38840;}</style>

    <div class="row my-4 p3">
        <div class="col-md-12">
            <div class="form-group ">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addCar"><i class="fa fa-plus"> Add a car </i></button>
            </div>
            <form action="{{route('admins.index')}}" method="post" class="form-inline my-2 my-lg-0">
   @csrf
     <input class="form-control mr-sm-2"style="font-size: 18px;" type="search"  name="search" placeholder="Enter your car's name.." aria-label="Search"> 
    <button class="btn btn-outline-warning my-3 my-sm-1"style="color: #a38840;font-size: 18px;" type="submit">Search</button>
  </form>
            
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Daily_price</th>
                            <th>Availablity</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($cars as $car)
                       <tr>
                       <td>{{$car->id}}</td>
                       <td>{{$car->marque}}</td>
                       <td>{{$car->model}}</td>
                       <td>{{$car->type}}</td>
                       <td>{{$car->prixJ}}</td>
                       <td>
                            @if($car->dispo)
                              <span class="badge badge-success">
                                Available   
                               </span> 
                            @else
                                <span class="badge badge-danger">
                                Reserved
                                </span> 
                            @endif    
                       </td>
                       <td>
                        <img src="{{asset($car->image)}}" 
                        width="80"
                        height="80"
                        class="img-fluid"
                        alt="" srcset="">
                       </td>
                           <td  class="d-flex flex-row justify-content-center">
                            <a href="{{route('cars.edit',$car->id)}}" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></a>
                            <form action="{{route('cars.destroy',$car->id)}}" method="post">
                           @csrf
                           {{method_field('delete')}}
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              <div>
              <a href="http://127.0.0.1:8000/admin?page=1" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 1">
                                        1
                                    </a>
                                    <a href="http://127.0.0.1:8000/admin?page=2" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2">
                                        2
                                    </a>
                                    <!-- <a href="http://localhost/car-blog/public/admin?page=3" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 3">
                                        3
                                    </a>
                                    <a href="http://localhost/car-blog/public/admin?page=4" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 4">
                                        4
                                    </a>
                                    <a href="http://localhost/car-blog/public/admin?page=5" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 5">
                                        5
                                    </a>
                                    <a href="http://localhost/car-blog/public/admin?page=6" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 6">
                                        6
                                    </a>
                                    <a href="http://localhost/car-blog/public/admin?page=7" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 7">
                                        7
                                    </a> -->
              </div>
            </div>

        </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade p3" id="addCar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('cars.same')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
               <label for="">Brand*</lable>
               <input type="text" name="marque"
                    id="" class="form-control"
                    placeholder="Brand" aria-describedly="helpId">
            </div>
            <div class="form-group">
               <label for="">Model*</lable>
               <input type="text" name="model"
                    id="" class="form-control"
                    placeholder="Model" aria-describedly="helpId">
            </div>
            <div class="form-group">
               <label for="">Type*</lable>
               <select class="form-control" name="type" id="">
               <option value="" selected disabled>Please choose a type</option>
               <option value="Diesel">Diesel</option>
               <option value="Essence">Essence</option>
            </select>
            </div>
            <div class="form-group">
               <label for="">Daily_price*</lable>
               <input type="number" name="prixJ"
                    id="" class="form-control"
                    placeholder="Daily_price" aria-describedly="helpId">
            </div>
            <div class="form-group">
               <label for="">Available*</lable>
               <select class="form-control" name="dispo" id="">
               <option value="" selected disabled>Please choose an option</option>
               <option value="1">Yes</option>
               <option value="0">No</option>
            </select>
            </div>
            <div class="form-group">
               <label for="">Photo*</lable>
               <input type="file" name="image"
                    id="" class="form-control"
                     aria-describedly="helpId">
            </div>
            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endsection