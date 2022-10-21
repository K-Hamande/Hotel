<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        $page_Data = Page::Where('id',1)->first();

        view()->share('About_Display',$page_Data);

        $Terme_Data = Page::Where('id',1)->first();

        view()->share('Terme_Display',$Terme_Data);
    }
}
