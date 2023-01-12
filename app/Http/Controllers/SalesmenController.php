<?php

namespace App\Http\Controllers;

use App\Models\Salesmen;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;


class SalesmenController extends Controller
{

    public function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
    public function createsales(Request $request)
    {
        //
        $validated = $request->validate([
            'uname' => 'required|max:255',
            'email' => 'required|unique:users|max:255|email',
            'password' => 'required',
        ]);

        $us = new User();
        $us->name = $request->input('uname');
        $us->email = $request->input('email');
        $us->role = 'Sales';
        $us->password =  Hash::make($request->input('password'));
        $us->save();

        $profile = new Profile();
        $profile->Phone = '-';
        $profile->City = '-';
        $profile->address = '-';
        $profile->state = '-';
        $profile->Country = '-';
        $profile->Comment = '-';
        $profile->Status = 'Active';
        $profile->User_id  = $us->id;
        $profile->Profileimg = 'profile.jpg';
        $profile->save();

        return response()->json([
        'message'   => 'Your Form Has Been Submitted !!',
        'class_name'  => 'alert-success',
        'username_name' => $request->input('uname')
        ]);

    }
    public function salesmanagers()
    {
        //
        $users = User::all();
        $sales = User::where('role', '=','sales')->get();
        $acstatus = array(
            'allprofile' => 'active',
            'activeprofile' => '',
            'archiveprofile' => ''
        );

        return view('Sales.index', compact('users', 'sales', 'acstatus' ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Activesalesprofile()
    {
        //
        $users = User::all();
        $sales = User::where('role', '=','sales')->get();
        $acstatus = array(
            'allprofile' => 'active',
            'activeprofile' => '',
            'archiveprofile' => ''
        );

        return view('Sales.active', compact('users', 'sales', 'acstatus'));
    }

    public function Archivesalesprofile()
    {
        //
        $users = User::all();
        $sales = User::where('role', '=','sales')->get();
        $acstatus = array(
            'allprofile' => 'active',
            'activeprofile' => '',
            'archiveprofile' => ''
        );

        return view('Sales.Archive', compact('users', 'sales', 'acstatus'));
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
     * @param  \App\Models\Salesmen  $salesmen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salesmen  $salesmen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $Vendors = User::where('role', '=','sales')->get();
        // $profile = Profile::where('User_id', $id)->get();
        // dd($user->profile->Phone);
        return view('Sales.edit', compact('user', 'Vendors'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salesmen  $salesmen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salesmen $salesmen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salesmen  $salesmen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function salesdelete($id)
    {
        //
        $user = User::find($id);

        $user->delete();

    }

}
