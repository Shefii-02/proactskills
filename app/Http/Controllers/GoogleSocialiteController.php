<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Storage;
use Hash;
use Carbon\Carbon;

use Illuminate\Support\Str;

class GoogleSocialiteController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
         
            $finduser = User::where('google_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->intended();
         
            }else{
                $contents = file_get_contents($user->avatar);
                $name = Str::random(40).'.png';
                
                Storage::put("/images/users/".$name, $contents);

                $newUser = new User;
                $newUser->email = $user->email;
                $newUser->name = $user->name;
                $newUser->google_id= $user->id;
                $newUser->password = Hash::make('123456dummy');
                $newUser->image = $name;
                $newUser->type  = "Student";
                $newUser->email_verified_at = Carbon::now();
                $newUser->save();

                Auth::login($newUser);

                return redirect()->intended();
            }
        
        } catch (Exception $e) {
            dd($e);
        }
    }
}
