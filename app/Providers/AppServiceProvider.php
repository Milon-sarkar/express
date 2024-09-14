<?php

namespace App\Providers;
use App\Models\GeneralSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $general_setting = GeneralSetting::latest()->first();
        View::share('general_setting', $general_setting);

    }
}
