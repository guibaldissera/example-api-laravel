<?php

namespace App\Providers\Transform;

use Illuminate\Support\ServiceProvider;

class TransformServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TransformLesson', function() {
            return new TransformLesson();
        });
    }

}
