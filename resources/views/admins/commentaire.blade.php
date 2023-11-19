@extends('layouts.master')

@section('content')

<style>.g {background-color: #a38840;}</style>

<div class ="row"><br>
 <div class="col-md-10 mx-5 my-10">
 @include('includes.messages')
 </div>
 </div>
 @yield('content')
</div>
<br>
<div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading" style="color: #a38840;" > <strong>Users</strong></span>
          </div>
<!-- <h1>Clients' comments </h1> -->
<div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>Image</th> -->
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Note</th> 
                            
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)                       
                    <tr>
                    
                       <td>{{$user->name}}</td>
                       <td>{{$user->email}}</td>
                       <td>{{$user->tel}}</td>
                       <td>{{$user->notes}}</td>
                       
                    </tr>  
                    @endforeach
                    </tbody>
                </table>
            </div>

            @endsection