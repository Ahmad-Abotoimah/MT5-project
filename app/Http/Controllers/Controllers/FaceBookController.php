<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
    /**
 * Login Using Facebook
 */
 public function loginUsingFacebook()
 {
    return Socialite::driver('facebook')->redirect();
 }

 public function callbackFromFacebook()
 {
  try {
     
       $user = Socialite::driver('facebook')->user();
       $finduser = User::where('email', $user->email)->first();
       
       if($finduser){
  
           Auth::login($finduser);
 
           return redirect()->route('home');       
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

        return redirect()->route('hulul');
       }
       

    

       

       
       }catch (Exception $e) {
         dd($e->getMessage());
     }
   }
}
