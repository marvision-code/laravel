<?php

namespace Marvision\Laravel;

use Illuminate\Support\ServiceProvider;

class MarvisionServiceProvider extends ServiceProvider
{
	public function boot()
	{
		include __DIR__.'/routes.php';
		$this->loadViewsFrom(__DIR__.'/views','marvision');
	}

	public function register(){
		$this->app['marvision'] = $this->app->share(function($app){
			return new Marvision;
		});
	}
}