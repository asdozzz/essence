<?php 
namespace Asdozzz\Essence;

use Illuminate\Support\ServiceProvider;

class EssenceServiceProvider extends ServiceProvider
{

	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/config/essence.php', 'essence');

		$this->app->singleton('columns', function ($app) {
			return new \Asdozzz\Essence\Columns();
		});

		$this->app->singleton('essence', function ($app) {
			return new \Asdozzz\Essence\Essence();
		});

		$this->app->singleton('operator', function ($app) {
			return new \Asdozzz\Essence\Operator();
		});
	}

	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__.'/lang/essence.php','essence');

		$this->publishes([
			__DIR__.'/lang/essence.php' => storage_path('lang/vendor/essence'),
            __DIR__ . '/config/essence.php' => config_path('essence.php')
        ], 'config');
	}

}