<?php

namespace MAnfal\sse;

use Illuminate\Support\ServiceProvider;

class SSEServiceProvider extends ServiceProvider
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
    private function registerSSEEvent() {
        $this->app['WSSEEVENT'] = $this->app->share(function($app)
        {
            return SSEEvent::class;
        });
    }

    private function registerSS() {
        $this->app['WSSE'] = $this->app->share(function($app)
        {
            return SSE::class;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSSEEvent();
        $this->registerSS();
    }

}
