<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('auth.sign-in');
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


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
