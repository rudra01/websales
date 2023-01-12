<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Profile;


class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function neworder()
    {
        # code...

    }
     public function Activeproducts()
     {
         //
         $Products = Product::where('status', 'Active')->get();;
         return view('Products.active', compact('Products'));
     }

     public function ArchiveProducts()
     {
         //
         $Products = Product::where('status', 'Deactive')->get();

         return view('Products.Archive', compact('Products'));
     }


    public function createproducts(Request $request)
     {
         //
         $validated = $request->validate([
             'name' => 'required|max:255',
             'category' => 'required|',
             'Sale_Commision' => 'required',
             'Purchasing_Price' => 'required',
             'Selling_Price' => 'required',
             'Quantity' => 'required',
             'Product_Code' => 'required',
             'dec' => 'required',
             'Product_Image'=> 'image|mimes:jpeg,png,jpg,gif|max:2048'
         ]);
         if($request->hasFile('Product_Image'))
         {
             //Get full name with extenstion
             $filenameWithExt = $request->file('Product_Image')->getClientOriginalName();
             // Get only name
             $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
             // GET ONLY EXTENTION
             $Extenstion = $request->file('Product_Image')->getClientOriginalExtension();
             // final file name
             $fileNameToStore = $filename. '_'.time().'.'.$Extenstion ;
             $path = $request->file('Product_Image')->storeAs('public/Productimg', $fileNameToStore);

         }
         else{
             $fileNameToStore = 'NocourseImge.jpg';
         }

         $pro = new Product();
         $pro->name = $request->input('name');
         $pro->category = $request->input('category');
         $pro->Sale_Commision = $request->input('Sale_Commision');
         $pro->Purchasing_Price = $request->input('Purchasing_Price');
         $pro->Selling_Price = $request->input('Selling_Price');
         $pro->Quantity = $request->input('Quantity');
         $pro->Product_Code = $request->input('Product_Code');
         $pro->Des = $request->input('dec');

         $pro->Product_Image = $fileNameToStore;

         $pro->save();

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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        return view('Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
