<?php

/*
 * This file is part of the liuhelong/253sms.
 */
namespace Liuhelong\Sms253;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
		$this->publishes([
			__DIR__.'/../config.php' => config_path('sms253.php'),
		]);
    }

    
    /**
     * Register the provider.
     */
    public function register()
    {
       
    }

}
