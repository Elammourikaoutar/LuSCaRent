@extends('layouts.master')

@section('content')
<style>.g {background-color: #a38840;}</style>

<div class="col-mx-16 d-flex flex-row align-items-center p3"><br>
<div class="row "><br>
        <div class="col-md-4 border border-light"><br>
            <div class="card mx-10">
              <div class="card text-left md-16">
                <br>
                    <img src="{{asset($user->image)}}" alt="!!" class="card-img-center mx-5 shadow-lg p-1 mb-2 bg-light rounded "width="250" heigth="200" ><br>
                    <h3 class="card-title d-flex flex-row align-items-center bg-light mx-3" ><span  style="color: #a38840;">Username:</span> </h3>
                    <h4 class="card-title d-flex flex-row align-items-center bg-light mx-3" >{{$user->name}}</h4>
                    <div class="card-body mg-5">
                        <p class="card-text d-flex flex-row align-items-center">
                            <span class="badge badge-danger mx-5"> Phonenumber:
                                {{$user->tel}}
                            </span>

                        </p>
                        <p> <span class="badge badge-primary mx-5"> City:
                                {{$user->ville}}
                            </span>
                           </p>
                        <p> <span class="badge badge-warning mx-5"> Email:
                                {{$user->email}}
                            </span></p>
                    </div>
                </div>
            </div>
        </div>    
   

        
        <div class="col-md-8"> <br>
            <h3 class=" bg-dark shadow-lg p-1 mb-2 bg-light rounded" style="color: #a38840;">My Orders</h3>
        
            <table class="table md-8">
                <thead>
                    <tr>
                        <th>Car_brand</th>
                        <th>Type</th>
                        <th>Daily_price</th>
                        <th>Start_date</th>
                        <th>End_date</th>
                        <th>Price_TTC</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach(auth()->user()->commands as $command)
                   <tr>
                        <td>{{App\Models\car::findorFail($command->car_id)->marque}}</td>
                        <td>{{App\Models\car::findorFail($command->car_id)->type}}</td>
                        <td>{{App\Models\car::findorFail($command->car_id)->prixJ}}</td>
                        <td>{{$command->dateL}}</td>
                        <td>{{$command->dateR}}</td>
                        <td>{{$command->prixTTC}}<td>
                        <td>
                            <form action="{{route('command.delete',[$command->id,$command->car_id])}}" method="delete">
                                @csrf
                                {{method_field('delete')}}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <!-- <tr>
                    <div class="card-img-top">
                       <img src="{{asset(App\Models\car::findorFail($command->car_id)->image)}}"width="450" height="300" class="img  m-3" alt="">
                    </div>               
                    </tr> -->
                   @endforeach
                </tbody>
            </table>
            <br>
        
        </div>
</div>


@endsection
