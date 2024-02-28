<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;
use Socialite;


class GoogleAuthController extends Controller
{
//      public function handleGoogleCallback()
//
//      {
//
//          try {
//
//              $user = Socialite::driver('google')->user();
//
//            $finduser = User::where('google_id', $user->id)->first();
//
//            if($finduser){
//
//                Auth::login($finduser);
//
//                return redirect('/home');
//
//            }else{
//
//                $newUser = User::create([
//
//                    'name' => $user->name,
//
//                    'email' => $user->email,
//
//              	    'google_id'=> $user->id
//
//                ]);
//
//                Auth::login($newUser);
//
//                return redirect()->back();
//
//            }
//
//        } catch (Exception $e) {
//
//            return redirect('auth/google');
//
//        }
//
//    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999))]);
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


}
