<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Mixins\StrMixins;

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
        // Str::macro('partNumber',function($part){
        //     return 'AB-'.substr($part,0,3).'-'.substr($part,3);
        // });

        Str::mixin(new StrMixins());
    }
}
