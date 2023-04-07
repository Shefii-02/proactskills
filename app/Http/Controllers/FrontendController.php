<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.index');
    }


    public function course(){
        return view('frontend.course');
    }

    public function sign_in(){
        if (Auth::check()) {
            return redirect('/');
        }
        else{
         return view('auth.sign-in');
        }
    }
    public function sign_up(){
        return view('auth.sign-up');
    }
    public function reset(){

        return view('auth.password');
    }
    public function confirm(){
        return view('auth.sign-in');
    }
    public function email(){
        return view('auth.sign-in');
    }

    public function profile(){
        
    }
    
}
