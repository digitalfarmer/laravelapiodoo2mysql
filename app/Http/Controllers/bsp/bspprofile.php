<?php

namespace App\Http\Controllers\bsp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bspprofile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('binasanprima.home');
    }

    public function aboutus()
    {
        # code...
        return view('binasanprima.aboutus');
    }

    public function service()
    {
        # code...
        return view('binasanprima.services');
    }
    public function partner()
    {
        # code...
        return view('binasanprima.partner');
    }
    public function products()
    {
        # code...
        return view('binasanprima.products');
    }

    public function contactus()
    {
        # code...
        return view('binasanprima.contactus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
