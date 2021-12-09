<?php

namespace App\Providers;

use App\Services\Video\Vimeo;
use App\Services\Video\Youtube;
use App\Contracts\Video\VideoHosting;
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
        $this->app->bind(VideoHosting::class, function($app){
            return new Vimeo();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
