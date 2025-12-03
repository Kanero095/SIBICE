<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect('/home');
    }

    public function callback()
    {
        $socialUser = Socialite::driver('google')->user();

        $registeredUser = User::where("google_id", $socialUser->id)->first();

        if(!$registeredUser){
            $user = User::updateOrCreate([
                'google_id' => $socialUser->id,
            ], [
                'name' => $socialUser->name,
                'email' => $socialUser->email,
                'password' => bcrypt('SIBICE1234'),
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
                'noContact' => '08xx00000000',
                'email_verified_at'=>date(now()),
            ]);

            Auth::login($user);

            return redirect('/home');
        }
        Auth::login($registeredUser);
    }
}
