@extends('layouts.master')

@section('content')
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card border border-info shadow-lg p-3 mb-5 bg-body rounded">
                <h2 class="card-header bg-dark text-warning">Rent this car</h2>
                <div class="row my-3"><div class="col-md-12">
                    <div class="card border border-none">
                    <h4 class="bg-dark text-light p-4">{{$car->marque}}</h4>
                    <div class="card-img-top">
                         <img src="{{asset($car->image)}}" width="450" heigth="450" class="img  m-3" alt="!!">
                    </div>
                    <div class="card-body">
                            <span class="badge badge-warning mx-2">Type:
                                {{$car->type}}
                            </span>
                            <span class="badge badge-info mx-2"> Price:
                                {{$car->prixJ}} dh 
                            </span><br>
                        </p>                          
                    </div>
            </div>
                </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for=" dateL">Pick-up date</label>
                            <input type="date" name="dateL" id=""
                             class="form-control" placeholder="start date.."aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for=" dateR"> Drop-off date</label>
                            <input type="date" name="dateR" id=""
                             class="form-control" placeholder="end date.."aria-describedby="helpId">
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-dark text-info">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 