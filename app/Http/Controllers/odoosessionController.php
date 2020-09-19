<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Cookie;


class odoosessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $odoo = new \Edujugon\Laradoo\Odoo();
        $version = $odoo->version();
        $odoo = $odoo->connect();    
             
       
        $inventory = $odoo->call('stock.inventory','get_stock',[74]);
        return $inventory;
    }

    public function getsession()
    {
        # code...
        $odoo = new \Edujugon\Laradoo\Odoo();
        
        $version = $odoo->version();
        $odoo = $odoo->connect();    
             
        $request = Cookie::get();
        //$value = $request->cookie();
        return $version;
    }
    public function get_inventory()
    {
        # code...
        return 'Hello inventory';
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
