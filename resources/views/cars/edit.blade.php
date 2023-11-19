@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 mx-auto">
                <div class="card bg-light shadow-lg p-3 mb-5 bg-body rounded">
                    <h3 class="card-header">Car update :</h3>
                    <div class="card-body">
                        <form action="{{route('cars.modifier',$car->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                            <label for="">Brand*</lable>
                            <input type="text" name="marque"
                                    id="" class="form-control"
                                    value="{{$car->marque}}"
                                    placeholder="Brand" aria-describedly="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">Model*</lable>
                            <input type="text" name="model"
                                    id="" class="form-control"
                                    value="{{$car->model}}"
                                    placeholder="Model" aria-describedly="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">Type*</lable>
                            <select class="form-control" name="type" id="">
                            <option value="" selected disabled>Please choose a type</option>
                            <option value="Diesel" {{ $car->type=='Diesel' ? 'selected' : ' '}} > Diesel</option>
                            <option value="Essence" {{ $car->type=='Essence' ? 'selected' : ' '}} > Essence</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="">Daily_price*</lable>
                            <input type="number" name="prixJ"
                                    id="" class="form-control"
                                    value="{{$car->prixJ}}"
                                    placeholder="Daily_price" aria-describedly="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">Available*</lable>
                            <select class="form-control" name="dispo" id="">
                            <option value="" selected disabled>Please choose an option</option>
                            <option value="1" {{ $car->dispo ? 'selected' : ' '}} > Yes </option>
                            <option value="0"{{ !$car->dispo ? 'selected' : ' '}} > No </option>
                            </select>
                            </div>
                            <div class="form-group">
                            <img src="{{asset($car->image)}}"  width="150" height="100" alt="" 
                                class="img">
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
    </div>
@endsection 