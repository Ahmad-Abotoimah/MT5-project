<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;


class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
        
    }
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
                
            $finduser = User::where('email', $user->email)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect('/hulul');       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'phone'=> 00,
                    'auth_type'=> 'google',
                    'password' => Hash::make($user->id)
                ]);
      
                Auth::login($newUser);
      
                 return redirect('/hulul'); 
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
