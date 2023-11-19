<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Command;     

use App\Http\Requests\StoreCommandRequest;
use App\Http\Requests\UpdateCommandRequest;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('commands.index')->with(['commands'=>Command::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        return view('commands.create')->withCar(Car::findorFail($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandRequest $request, $id)
{
        dd('yy');
           $this->validate($request,[
              'user_id'=>'required',
              'car_id'=>'required',
              'dateL'=>'required',
              'dateR'=>'required'
           
           ]);
         $car= Car::findorFail($request->car_id);
         $dateLocation = new DateTime($request->dateL);
         $dateReturn = new DateTime($request->dateR);
         $days= date_diff($dateLocation,$dateReturn);
         $prixTTc=$car->prixJ*$days->format('%d');

         Command::create([
              'user_id'=>auth()->user()->id,
              'car_id'=>$request->car_id,
              'dareL'=>$request->dateL,
              'dateR'=>$request->dateR,
              'prixTTC'=>$prixTTc,
            
         ]); 
         $car->update([
             'dispo'=>0
         ]);
          return redirect()->route('users.profile',auth()->user()->id)->with([
              'success'=>'command added'
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(Command $command)
    {
        return view ('commands.show')->withCommand($command);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit($commandId,$carId)
    {
        $cmd= Command::findOrFail($commandId);
        if($cmd->car_id == $carId){
        $cmd->editer();
       return redirect()->route('admins.reservation')->with([
           'success'=>'command updated !'
           ]);
        }
    }
    public function deleteAdminCommands($commandId,$carId){
        $cmd= Command::findOrFail($commandId);
        if($cmd->car_id == $carId){
            $cmd->delete();
            return redirect()->route('admins.reservation')->with([
                'success'=>'command deleted'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandRequest  $request
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandRequest $request, Command $command)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy(Command $command)
    {
        $command->delete();
            return redirect()->route('users.profile',auth()->user()->id)->with([
                'success'=>'command deleted'
            ]);
    }

    public function addme(Request $request)
    {
        $this->validate($request,[
            'car_id'=>'required',
            'dateL'=>'required',
            'dateR'=>'required'
         
         ]);
       $car= Car::findorFail($request->car_id);
       $dateLocation = new \DateTime($request->dateL);
       $dateReturn = new \DateTime($request->dateR);
       $days= date_diff($dateLocation,$dateReturn);
       $prixTTc=$car->prixJ*$days->format('%d');

       Command::create([
            'user_id'=>auth()->user()->id,
            'car_id'=>$request->car_id,
            'dateL'=>$request->dateL,
            'dateR'=>$request->dateR,
            'prixTTC'=>$prixTTc,
          
       ]); 
       $car->update([
           'dispo'=>0
       ]);
        return redirect()->route('users.profile',auth()->user()->id)->with([
            'success'=>'command added'
        ]);
    }

    public function deleteUserCommands($commandId,$carId){
        $command= Command::findOrFail($commandId);
        if($command->car_id == $carId){
            $command->delete();
            return redirect()->route('users.profile',auth()->user()->id)->with([
                'success'=>'command deleted'
            ]);
        }

    }  
    // public function updateUserCommands($commandid,$carid){
    //     $command= Command::findOrFail($commandId);
/*public function modifier(Request $request, Car $car)
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
    }*/
}
     