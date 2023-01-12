<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salesmen;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
class VendorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function Activevendorprofile()
     {
         //
         $users = User::all();
         $sales = User::where('role', '=','Vendor')->get();
         $acstatus = array(
             'allprofile' => 'active',
             'activeprofile' => '',
             'archiveprofile' => ''
         );

         return view('Vendor.active', compact('users', 'sales', 'acstatus'));
     }

     public function Archivevendorprofile()
     {
         //
         $users = User::all();
         $sales = User::where('role', '=','Vendor')->get();
         $acstatus = array(
             'allprofile' => 'active',
             'activeprofile' => '',
             'archiveprofile' => ''
         );

         return view('Vendor.Archive', compact('users', 'sales', 'acstatus'));
     }

     public function ActiveWearhouseprofile()
     {
         //
         $users = User::all();
         $sales = User::where('role', '=','Wearhouse')->get();
         $acstatus = array(
             'allprofile' => 'active',
             'activeprofile' => '',
             'archiveprofile' => ''
         );

         return view('Wearhouse.active', compact('users', 'sales', 'acstatus'));
     }

     public function ArchiveWearhouseprofile()
     {
         //
         $users = User::all();
         $sales = User::where('role', '=','Wearhouse')->get();
         $acstatus = array(
             'allprofile' => 'active',
             'activeprofile' => '',
             'archiveprofile' => ''
         );

         return view('Wearhouse.Archive', compact('users', 'sales', 'acstatus'));
     }


     public function createwearhouse(Request $request)
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
         $us->role = 'Wearhouse';
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


     public function createvendor(Request $request)
     {
         //
         $validated = $request->validate([
             'uname' => 'required|max:255',
             'Cname' => 'required|max:255',
             'email' => 'required|unique:users|max:255|email',
             'password' => 'required',
         ]);

         $us = new User();
         $us->name = $request->input('uname');
         $us->email = $request->input('email');
         $us->role = 'Vendor';
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

        $ven = new Vendor();
        $ven->status = 'Active';
        $ven->Company_Name= $input['Cname'];
        $ven->User_id = $us->id;
        $ven->save();

         return response()->json([
         'message'   => 'Your Form Has Been Submitted !!',
         'class_name'  => 'alert-success',
         'username_name' => $request->input('uname')
         ]);

     }
    public function index()
    {
        //
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
        $user = User::find($id);
        $Vendors = User::where('role', '=','Vendor')->get();
        // $profile = Profile::where('User_id', $id)->get();
        // dd($user->profile->Phone);
        return view('Vendor.edit', compact('user', 'Vendors'));

    }

    public function editWearhouse($id)
    {
        //
        $user = User::find($id);
        $Vendors = User::where('role', '=','Vendor')->get();
        // $profile = Profile::where('User_id', $id)->get();
        // dd($user->profile->Phone);
        return view('Wearhouse.edit', compact('user', 'Vendors'));

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
