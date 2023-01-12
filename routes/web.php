<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesmenController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentOrderController;
use Illuminate\Support\Facades\URL;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/salesmanagers', [DashboardController::class, 'salesmanagers'])->name('salesmanagers');
    Route::get('/vendor', [DashboardController::class, 'vendor'])->name('vendor');
    Route::get('/wearhouse', [DashboardController::class, 'wearhouse'])->name('wearhouse');
    Route::get('/products', [DashboardController::class, 'products'])->name('products');
    Route::post('/uploadprofileimg', [SalesmenController::class, 'uploadprofileimg'])->name('uploadprofileimg');
});

// sales manager
Route::post('/createsales', [SalesmenController::class, 'createsales'])->name('createsales');
Route::get('/Salesman/{id}', [SalesmenController::class, 'edit'])->name('Salesman');
Route::delete('salesdelete', [SalesmenController::class, 'salesdelete'])->name('salesdelete');
Route::get('/Activesalesprofile', [SalesmenController::class, 'Activesalesprofile'])->name('Activesalesprofile');
Route::get('/Archivesalesprofile', [SalesmenController::class, 'Archivesalesprofile'])->name('Archivesalesprofile');

// Vendors
// Route::get('/VendorList', [VendorController::class, 'vendorlist'])->name('vendorlist');
Route::post('/createvendor', [VendorController::class, 'createvendor'])->name('createvendor');
Route::get('/Vendor/{id}', [VendorController::class, 'edit'])->name('editVendor');
Route::get('/Activevendorprofile', [VendorController::class, 'Activevendorprofile'])->name('Activevendorprofile');
Route::get('/Archivevendorprofile', [VendorController::class, 'Archivevendorprofile'])->name('Archivevendorprofile');

// Wearhouse
Route::post('/createwearhouse', [VendorController::class, 'createwearhouse'])->name('createwearhouse');
Route::get('/Wearhouse/{id}', [VendorController::class, 'edit'])->name('editWearhouse');
Route::get('/ActiveWearhouseprofile', [VendorController::class, 'ActiveWearhouseprofile'])->name('ActiveWearhouseprofile');
Route::get('/ArchiveWearhouseprofile', [VendorController::class, 'ArchiveWearhouseprofile'])->name('ArchiveWearhouseprofile');


// Products
Route::post('/createproducts', [ProductController::class, 'createproducts'])->name('createproducts');
Route::get('/Product/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::get('/ActiveProducts', [ProductController::class, 'ActiveProducts'])->name('ActiveProducts');
Route::get('/ArchiveProducts', [ProductController::class, 'ArchiveProducts'])->name('ArchiveProducts');

// Order
Route::get('/Orders', [ShipmentOrderController::class, 'Orders'])->name('Orders');
Route::post('/Orders', [ShipmentOrderController::class, 'storeorder'])->name('storeorder');
Route::post('/Orderscal', [ShipmentOrderController::class, 'ordercal'])->name('ordercal');
Route::post('/proorder', [ShipmentOrderController::class, 'proorder'])->name('proorder');
Route::get('/Order/{id}', [ShipmentOrderController::class, 'editorder'])->name('editOrder');
// Route::get('/ActiveProducts', [ProductController::class, 'ActiveProducts'])->name('ActiveProducts');
// Route::get('/ArchiveProducts', [ProductController::class, 'ArchiveProducts'])->name('ArchiveProducts');
