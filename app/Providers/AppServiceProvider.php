<?php

namespace App\Providers;

use Carbon\Carbon;
use App\visitorCounter;
use Illuminate\Support\Facades\DB;
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
        View::composer('*', function ($view) {
        // $counter =  visitorCounter::count();
        $counter =  visitorCounter::distinct()->count('ip');
            $view->with('counter', $counter);
        });
    }
}
