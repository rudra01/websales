<?php

namespace App\Http\Controllers;

use App\Models\ShipmentOrder;
use App\Models\Vendor;
use App\Models\Product;
use Illuminate\Http\Request;


class ShipmentOrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Orders()
    {
        # code...
        $Orders = ShipmentOrder::all();
        $vendors = Vendor::all();
        $products = Product::all();

        return view('Order.index', compact('Orders', 'vendors', 'products'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proorder(Request $request)
    {
        //
        // dd($request->input('proid'));
        $prooreer = $request->prodata;
        // $prodatar = $_POST['prodata'];
        return response()->json([
            'message'   => 'Your Form Has Been Submitted !!',
            'class_name'  => 'alert-success',
            'Product Id' => $request->prodata,
            'Product Id2' => $prooreer,
            // 'Product Id2' => $prodatar,
            ]);

    }
    public function ordercal(Request $request)
    {
        //

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeorder(Request $request)
    {
        //
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipmentOrder  $shipmentOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ShipmentOrder $shipmentOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipmentOrder  $shipmentOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipmentOrder $shipmentOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipmentOrder  $shipmentOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipmentOrder $shipmentOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipmentOrder  $shipmentOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipmentOrder $shipmentOrder)
    {
        //
    }
}
