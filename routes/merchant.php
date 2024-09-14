<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\merchant\LoginController;
use App\Http\Controllers\merchant\HomeController;
use App\Http\Controllers\merchant\ParcelController;





Route::prefix('merchant')->group(function () {

  Route::post('/login', [LoginController::class, 'login']);
  Route::get('/logout',[LoginController::class,'logout'])->middleware('merchant');

    Route::middleware('merchant')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index']);

        Route::resources([
          'parcel' => ParcelController::class, ////============= Parcel  resource

          ]);
        

    });

});