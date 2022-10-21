<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Politique;
use App\Models\Terme;
use Illuminate\Pagination\Paginator;
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
        $Page_Data = Page::Where('id',1)->first();

        view()->share('About_Display',$Page_Data);
        

        $Terme_Data = Terme::Where('id',1)->first();

        view()->share('Terme_Display',$Terme_Data);
 


        $Politique_Data = Politique::Where('id',1)->first();

        view()->share('Politique_Display',$Politique_Data);

    }
}
