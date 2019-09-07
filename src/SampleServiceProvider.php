<?php
namespace Manoj\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{

    public function boot()
    {
//        dd(__DIR__);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resource/views', 'sample');

        $this->publishes([
            __DIR__.'/Config/sample.php' => config_path('sample.php'),
        ]);
    }

    public function register()
    {

    }
}