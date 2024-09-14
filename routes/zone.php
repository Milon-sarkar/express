<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\zone\LoginController;
use App\Http\Controllers\zone\HomeController;
use App\Http\Controllers\zone\ParcelController;
use App\Http\Controllers\zone\MerchantController;
use App\Http\Controllers\zone\DeliveryboyController;



Route::prefix('branch')->group(function () {
    Route::get('/manager', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout',[LoginController::class,'logout'])->middleware('branch');


    Route::middleware('branch')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index']);

        Route::resources([
            'branchparcel' => ParcelController::class, ////============= Parcel  resource
            'branchmerchant' => MerchantController::class, ////============= merchant  resource
            'branchdeliveryboy' => DeliveryboyController::class, ////============= merchant  resource
  
            ]);
        

    });
});