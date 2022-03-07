<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index (){

        return redirect('/hulul');
    }
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        }

    public function  store(Request $request){

        $request->validate([
            'f_name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'password' => ['required', 'string', 'min:8'],
            'Terms' => ['required'],
            
        ]);
         User::create([
            'name' => $request['f_name']." ".($request['l_name']?$request['l_name']:""),
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone'=>$request['phone'],
            'type'=>$request['type'],
            'country'=>$request['country'],
            'web'=>$request['web']?$request['web'] :null,
        ]);
        // $user = new User();
        // $user->name = $request->f_name." ".($request->l_name?$request->l_name:"");
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->password = Hash::make($request->password);
        // $user->type = $request->type;
        // $user->country = $request->country;
        // $user->web = $request->web?$request->web :null;
        // $user->save();
    }
}
