<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Car;
use App\Models\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class detailsController extends Controller
{
    public function index() {
        return view('cars.details');
    
    }
        //
    
}
