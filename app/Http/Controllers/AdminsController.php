<?php

namespace App\Http\controllers;

use App\Models\Command;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminsController extends Controller
{
    // public function index ()
    // {
    //     return view('admins.index')->withCars(Car::orderBy('created_at','DESC')->paginate(10));
    // }

    public function index(Request $request)
    {
        if($request->search !== null){
            $cars = Car::orderBy('created_at','DESC')->whereMarque($request->search)->paginate(3);
            return view('admins.index')->with([
                'cars'=>$cars,
                'title'=>"Founded results of :".$request->search,
                'count' => $cars->count()
            ]);
        }else{
            //$allcars = Car::where('dispo','=',1)->get();
           $cars = Car::all();
            return view('admins.index')->with([
               // 'dispo'=>$allcars,
                'cars'=>Car::paginate(12),
                'title'=>"Our Luxury Cars",
                'count' => $cars->count()

            ]);
        }

    }


    public function reservation(){

        $commands = DB::table('commands')
        ->join('users', 'users.id', '=', 'commands.user_id')
        ->join('cars', 'cars.id', '=', 'commands.car_id')
        ->select('users.name', 'users.email', 'users.image as avatar', 'commands.*', 'cars.marque')
        ->get();

       return view('admins.reservation', compact('commands'));
        // $commands =Command::all();
        //  return view('admins.reservation',compact('commands'));
    }

//     public function commentaire(){

//         $commands = DB::table('commands')
//         ->join('users', 'users.id', '=', 'commands.user_id')
//         ->select('users.name', 'users.email', 'users.tel','users.notes')
//         ->get();

//        return view('admins.commentaire');

// }
public function commentaire(Request $request)
{
    if($request->search !== null){
        $users = User::orderBy('created_at','DESC')->whereMarque($request->search)->paginate(3);
        return view('admins.commentaire')->with([
            'users'=>$users,
        ]);
    }else{
        //$allcars = Car::where('dispo','=',1)->get();
       $users = User::all();
        return view('admins.commentaire')->with([
           // 'dispo'=>$allcars,
            'users'=>User::paginate(12),


        ]);
    }


}
}
?>