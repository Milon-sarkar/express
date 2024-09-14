<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\admin\AdminmerchantController;
use App\Http\Controllers\admin\ParcelController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DeliveryboyController;
use App\Http\Controllers\admin\SettingContoller;
use App\Http\Controllers\admin\ZoneController;
use App\Http\Controllers\admin\WightController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\PaymentController;


// frontend controller
use App\Http\Controllers\frontend\fronthomeController;
use App\Http\Controllers\frontend\FrontMerchentController;

// Pick and dropboy Controller
use App\Http\Controllers\pickanddrop\PickboyController;





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

// Front end route controller
    Route::get('/',[fronthomeController::class,'index']);
    Route::get('/frontcatagory/{id}',[fronthomeController::class,'show']);
    Route::get('/merchant-register',[FrontMerchentController::class,'create']);
    Route::post('/merchant_store',[FrontMerchentController::class,'store']);
    Route::resources(['merchantlogin' => FrontMerchentController::class,]);
    

// Backend route
    // admin login route
        Route::get('/admin',[loginController::class,'index']);
        Route::post('/admin/login',[loginController::class,'login']);
        Route::get('/admin/home',[homeController::class,'index'])->middleware('login');
        Route::get('/admin/logout',[loginController::class,'logout'])->middleware('login');

   // user route controller
        Route::get('/users',[userController::class,'index'])->middleware('login');
        Route::get('/users/create',[userController::class,'create'])->middleware('login');
        Route::post('/users/store',[userController::class,'store'])->middleware('login');
        Route::get('/users/{id}',[userController::class,'show'])->middleware('login');
        Route::get('/users/{id}/edit', [userController::class,'edit'])->middleware('login');
        Route::put('/users/update/{id}', [userController::class,'update'])->middleware('login');
        Route::delete('/users/delete/{id}', [userController::class,'destroy'])->middleware('login');
    

    // merchant route controller
     Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/adminmerchant',[AdminmerchantController::class,'index']);
        Route::get('/adminmerchant/create',[AdminmerchantController::class,'create']);
        Route::post('/adminmerchant/store',[AdminmerchantController::class,'store']);
        Route::get('/adminmerchant/{id}/edit', [AdminmerchantController::class,'edit']);
        Route::put('/adminmerchant/update/{id}', [AdminmerchantController::class,'update']);
        Route::delete('/adminmerchant/delete/{id}', [AdminmerchantController::class,'destroy']);
     });
    


    // parcel route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/adminparcel',[ParcelController::class,'index']);
        Route::get('/adminparcel/{id}',[ParcelController::class,'show']);
        Route::get('parcel/status/change/{id}', [ParcelController::class, 'statusChange'])->name('parcel.status.change');
        //Route::get('/adminmerchant/create',[ParcelController::class,'create']);
        //Route::post('/adminmerchant/store',[ParcelController::class,'store']);        
        //Route::get('/adminmerchant/{id}/edit', [ParcelController::class,'edit']);
        //Route::put('/adminmerchant/update/{id}', [ParcelController::class,'update']);
        //Route::delete('/adminmerchant/delete/{id}', [ParcelController::class,'destroy']);
     });
    
    
    // Category route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/category',[CategoryController::class,'index']);
        Route::get('/category/create',[CategoryController::class,'create']);
        Route::post('/category/store',[CategoryController::class,'store']);
        Route::get('/category/{id}/edit', [CategoryController::class,'edit']);
        Route::put('/category/update/{id}', [CategoryController::class,'update']);
        Route::delete('/category/delete/{id}', [CategoryController::class,'destroy']);
     });

     // delivery boy route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/deliveryboy',[DeliveryboyController::class,'index']);
        Route::get('/deliveryboy/create',[DeliveryboyController::class,'create']);
        Route::post('/deliveryboy/stores',[DeliveryboyController::class,'store']);
        Route::get('/deliveryboy/{id}/edits', [DeliveryboyController::class,'edit']);
        Route::put('/deliveryboyes/update/{id}', [DeliveryboyController::class,'update']);
        Route::delete('/deliveryboy/deletes/{id}', [DeliveryboyController::class,'destroy']);
     });


     // General setting route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/general/setting',[SettingContoller::class,'index']);
        Route::post('/general/changeGeneralSetting',[SettingContoller::class,'changeGeneralSetting']);
        // Route::post('/deliveryboy/store',[SettingContoller::class,'store']);
        // Route::get('/deliveryboy/{id}/edit', [SettingContoller::class,'edit']);
        // Route::put('/deliveryboyes/update/{id}', [SettingContoller::class,'update']);
        // Route::delete('/deliveryboy/delete/{id}', [SettingContoller::class,'destroy']);
     });


     // Zone route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/zones',[ZoneController::class,'index']);
        Route::get('/zones/create',[ZoneController::class,'create']);
        Route::post('/zones/store',[ZoneController::class,'store']);
        Route::get('/zones/{id}/edit', [ZoneController::class,'edit']);
        Route::put('/zones/update/{id}', [ZoneController::class,'update']);
        Route::delete('/zones/delete/{id}', [ZoneController::class,'destroy']);
     });


      // wight   route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/wight',[WightController::class,'index']);
        Route::get('/wight/create',[WightController::class,'create']);
        Route::post('/wight/store',[WightController::class,'store']);
        Route::get('/wight/{id}/edit', [WightController::class,'edit']);
        Route::put('/wight/update/{id}', [WightController::class,'update']);
        Route::delete('/wight/delete/{id}', [WightController::class,'destroy']);
    });

     //Branch route controller
    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/branch',[BranchController::class,'index']);
        Route::get('/branch/create',[BranchController::class,'create']);
        Route::post('/branch/store',[BranchController::class,'store']);
        Route::get('/branch/{id}/edit', [BranchController::class,'edit']);
        Route::put('/branch/update/{id}', [BranchController::class,'update']);
        Route::delete('/branch/delete/{id}', [BranchController::class,'destroy']);
    });


    Route::group(['namespace' => 'admin', 'middleware' => 'login'], function () {        
        Route::get('/payment',[PaymentController::class,'index']);
        Route::get('/payment/create',[PaymentController::class,'create']);
        Route::post('/payment/store',[PaymentController::class,'store']);
        Route::get('/payment/{id}/edit', [PaymentController::class,'edit']);
        Route::put('/payment/update/{id}', [PaymentController::class,'update']);
        Route::delete('/payment/delete/{id}', [PaymentController::class,'destroy']);
    });








// Route::get('/', function () {
//     return view('welcome');
// });

// user route 
 Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('Auth')->group(function () {


    Route::resources([
        'pickboy' => PickboyController::class, ////============= Parcel  resource
    

    ]);
});


