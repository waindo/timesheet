<<<<<<< HEAD
<?php namespace Illuminate\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('paginator', function($app)
		{
			$paginator = new Environment($app['request'], $app['view'], $app['translator']);

			$paginator->setViewName($app['config']['view.pagination']);

			$app->refresh('request', $paginator, 'setRequest');

			return $paginator;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paginator');
	}

}
=======
<?php namespace Illuminate\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('paginator', function($app)
		{
			$paginator = new Environment($app['request'], $app['view'], $app['translator']);

			$paginator->setViewName($app['config']['view.pagination']);

			$app->refresh('request', $paginator, 'setRequest');

			return $paginator;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paginator');
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
