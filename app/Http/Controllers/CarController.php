<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Command;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class CarController extends Controller
{
        /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if($request->search !== null){
            $cars = Car::orderBy('created_at','DESC')->whereMarque($request->search)->paginate(3);
            return view('cars.index')->with([
                'cars'=>$cars,
                'title'=>"Founded results of :".$request->search,
                'count' => $cars->count()
            ]);
        }else{
            //$allcars = Car::where('dispo','=',1)->get();
           $cars = Car::all();
            return view('cars.index')->with([
               // 'dispo'=>$allcars,
                'cars'=>Car::paginate(9),
                'title'=>"Our Luxury Cars",
                'count' => $cars->count()

            ]);
        }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request, $id)
    {
        dd('hh');
       $this->validate($request,[
            'marque'=>'required',
            'model'=>'required',
            'type'=>'required',
            'prixJ'=>'required',
            'dispo'=>'required',
            'image'=>'required'

        ]);
        $name='';
        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path('images'),$name);
        }
        Car::create([
            'marque'=>$request->marque,
            'model'=>$request->model,
            'type'=>$request->type,
            'prixJ'=>$request->prixJ,
            'dispo'=>$request->dispo,
            'image'=>'images/'.$name
        ]);
        return redirect()->route('admins.index')->withSuccess('car added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show')->withCar($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        return view('cars.edit')->withCar($car);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $this->validate($request,[
            'marque'=>'required',
            'model'=>'required',
            'type'=>'required',
            'prixJ'=>'required',
            'dispo'=>'required',
            

        ]);
        $image= $car->image;
        if($request->hasFile('image')){
            
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path('images'),$name);
            $image='/images/'.$name;
        }
        $car->update([
            'marque'=>$request->marque,
            'model'=>$request->model,
            'type'=>$request->type,
            'prixJ'=>$request->prixJ,
            'dispo'=>$request->dispo,
            'image'=>$image
        ]);
        return redirect()->route('admins.index')->withSuccess('car updated !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admins.index')->withSuccess('car deleled !');

    }

    public  function same(Request $request)
    {
        $this->validate($request,[
            'marque'=>'required',
            'model'=>'required',
            'type'=>'required',
            'prixJ'=>'required',
            'dispo'=>'required',
            'image'=>'required'

        ]);
      
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path('images'),$name);
        
        Car::create([
            'marque'=>$request->marque,
            'model'=>$request->model,
            'type'=>$request->type,
            'prixJ'=>$request->prixJ,
            'dispo'=>$request->dispo,
            'image'=>'/images/'.$name
        ]);
        return redirect()->route('admins.index')->withSuccess('car added !');
    
    }
    public function modifier(Request $request, Car $car)
    {
        $this->validate($request,[
            'marque'=>'required',
            'model'=>'required',
            'type'=>'required',
            'prixJ'=>'required',
            'dispo'=>'required',
            

        ]);
        $image= $car->image;
        if($request->hasFile('image')){
            
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path('images'),$name);
            $image='/images/'.$name;
        }
        
            $car->marque=$request->marque;
            $car->model=$request->model;
            $car->type=$request->type;
            $car->prixJ=$request->prixJ;
            $car->dispo=$request->dispo;
            $car->image=$image;
        
            $car->save();
        return redirect()->route('admins.index')->withSuccess('car updated !');
        
    }
}
