<?php

namespace Marvision\Laravel;

use Illuminate\Support\ServiceProvider;

class MarvisionServiceProvider extends ServiceProvider
{
	public function boot()
	{
		include __DIR__.'/routes.php';
		$this->loadViewsFrom(__DIR__.'/views','marvision_view');
		$this->loadTranslationsFrom(__DIR__ . '/lang', 'marvision_lang');
	}

	public function register(){
		$this->app['marvision'] = $this->app->share(function($app){
			return new Marvision;
		});
	}
}