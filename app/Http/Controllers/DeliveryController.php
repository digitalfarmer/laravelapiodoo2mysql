<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryModel;
use App\DoHeader;
use App\DoDetail;
use Session;

class DeliveryController extends Controller
{
    public function sessionodoo()
    {
        # code...
        $odoo = new \Edujugon\Laradoo\Odoo();
        // $version = $odoo->version();
        $odoo = $odoo->connect();
        $session_id = Session::getId();
        return $session_id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odoo = new \Edujugon\Laradoo\Odoo();
       // $odoo = $odoo->connect();
        $uid = $odoo->getUid();
        //get userid
        $userId= $odoo->getUid();
        //check version
        // $version= $odoo->version();
        // //check permission;
        // $can = $odoo->can('read', 'res.partner');
        // $cant= $can ? 'true':'false';
        
        // $stock_picking = $odoo->where('state','done')
        // ->get('stock.picking');
        return $userId;
        //return view('delivery')->with('stock_picking',$stock_picking);
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
    public function show($nodo)
    {
        $post = substr($nodo,-5);
        $int = substr($nodo,5,6);
        $pra =substr($nodo,0,5);
            
        $nodel = $pra.'/'.$int.'/'.$post;
        $delivery= DeliveryModel::where('no_delivery',$nodel)->get();
        return $delivery;
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
            
            $no= substr($id,0,5).'/'.substr($id,5,6).'/'.substr($id,-5);
                // Update the order
            
            //delete existing do
            $deliverydell = DoDetail::where('no_delivery', $no);
            $deliverydell->delete();

            
            $doUpdate = $request->all();
            $doDetail = DoDetail::where('no_delivery',$no);
            $doDetail->update($doUpdate);

            $res['message']='Succsess';
            $res['code']='200';
            return $res;     
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
