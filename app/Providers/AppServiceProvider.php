<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
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
        if (!$this->app->environment('production')) {
            $this->app->register('App\Providers\FakerServiceProvider');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        
        View()->share('setting', Setting::first());
        //View()->share('messages', Message::where('seen_message','===',null)->take(3)->get());

    }
}
