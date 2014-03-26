<?php namespace Atrakeur\Pmessagery;

use Illuminate\Support\ServiceProvider;

class PmessageryServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('atrakeur/pmessagery');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['pmessagery'] = $this->app->share(function($app)
		{
			return new Pmessagery($app['config']);
		});
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Pmessagery', 'Atrakeur\Pmessagery\Facades\Pmessagery');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('pmessagery');
	}

}
