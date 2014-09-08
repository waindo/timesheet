<<<<<<< HEAD
<?php namespace Illuminate\Cookie;

use Illuminate\Support\ServiceProvider;

class CookieServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('cookie', function($app)
		{
			$config = $app['config']['session'];

			return with(new CookieJar)->setDefaultPathAndDomain($config['path'], $config['domain']);
		});
	}
}
=======
<?php namespace Illuminate\Cookie;

use Illuminate\Support\ServiceProvider;

class CookieServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('cookie', function($app)
		{
			$config = $app['config']['session'];

			return with(new CookieJar)->setDefaultPathAndDomain($config['path'], $config['domain']);
		});
	}
}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
