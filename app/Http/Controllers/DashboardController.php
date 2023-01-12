<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(\Auth::user()->profile->Status != 'Active' ){
            \Auth::guard('web')->logout();
            return redirect('/')->with('error', 'Access Denied');
        }else {
            $users = User::Where('role' , 'Vendor')->get();
            $currenturl = "home";
            return view('dashboard', compact('users',  'currenturl'));
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salesmanagers()
    {
        //
        $users = User::all();
        $sales = User::where('role', '=','sales')->get();

        return view('Sales.index', compact('users', 'sales'));
    }

    public function vendor()
    {
        //
        $users = User::all();
        $vendors = User::where('role', '=','Vendor')->get();

        return view('Vendor.index', compact('users', 'vendors'));
    }

    public function wearhouse()
    {
        //
        $users = User::all();
        $vendors = User::where('role', '=','Wearhouse')->get();

        return view('Wearhouse.index', compact('users', 'vendors'));
    }
    public function products()
    {
        //
        $users = User::all();
        $Products = Product::all();

        return view('Products.index', compact('users', 'Products'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadprofileimg(Request $request)
    {
        //
        $this->validate($request, [
            'profileimg'=> 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($request->hasFile('profileimg'))
        {
            //Get full name with extenstion
            $filenameWithExt = $request->file('profileimg')->getClientOriginalName();
            // Get only name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // GET ONLY EXTENTION
            $Extenstion = $request->file('profileimg')->getClientOriginalExtension();
            // final file name
            $fileNameToStore = $filename. '_'.time().'.'.$Extenstion ;
            $path = $request->file('profileimg')->storeAs('public/profile', $fileNameToStore);

        }
        else{
            $fileNameToStore = 'NocourseImge.jpg';
        }


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
