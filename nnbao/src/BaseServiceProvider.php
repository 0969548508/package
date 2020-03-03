<?php 

namespace nnbao;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider{
	
	public function boot(){
		$this->loadRoutesFrom(__DIR__.'./../routes/web.php');
		$this->loadViewsFrom(__DIR__.'./../resources/views', 'package');
		$this->loadTranslationsFrom(__DIR__.'./../resources/lang/en', 'lang');

		 $this->publishes([
	        __DIR__.'./../resources/lang/en' => resource_path('lang/en'),
	    ]);
	}

	public function register(){

	}

}