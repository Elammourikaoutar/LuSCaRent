<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Car;
use App\Models\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class UsersController extends Controller
{
    public function show($id){
        return view('users.show')->withUser(User::findorfail($id));
    }
    
    public function testmail(){
        
         Mail::to('souhaildeep@gmail.com')->send(new TestMail());
    }
    
    public function create(){
        return view('users.register');
    }
    public function register(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
            'name'=>'required',
            'tel'=>'required',
            'ville'=>'required',
            'image'=>'required'

        ]);
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move(public_path('images'),$name);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'tel'=>$request->tel,
            'ville'=>$request->ville,
            //'notes'=>$request->notes,
            'image'=>'/images/'.$name

        ]);

        return redirect()->route('users.login')->with([
            'success'=>'your account is created, please sign in !'
        ]);
    }

    public function login(){
        return view('users.login')->with([   
    'success'=>'Please sign in first or create new account !'
    ]);
        
    }


    public function auth(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('cars.index')->with([   
                'success'=>'Chose your car !'
            ]);
        } else {
            return redirect()->route('users.login')->with([
                'error'=>'Email or password not correct'
            ]);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('cars.index');
    }

    public function info(Request $request){
        // $this->validate($request,[
        //     'name'=>'required',
        //     'tel'=>'required',
        //     'email'=>'required',
        //     'notes'=>'required',
        
        // ]);
      

        User::create([
            'name'=>$request->name,
            'tel'=>$request->tel,
            'email'=>$request->email,
            'notes'=>$request->notes,
//'password'=>Hash::make($request->password),

        ]);
        return redirect()->route('cars.contact')->with([
            'success'=>'Your message has been successfully sent to our team !'
        ]);
    }
}
