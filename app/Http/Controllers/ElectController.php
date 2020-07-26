<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
    
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {

        // $user = Auth::user();
        return view('site.shops.electshop');
    }
}
