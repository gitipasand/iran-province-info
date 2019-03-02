<?php

namespace Gitipasand\IranProvinceInfo;

use Illuminate\Support\ServiceProvider;

class IranProvinceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/data' => storage_path('gitipasand/province'),
        ], 'public');
    }
}
