<<<<<<< HEAD
<?php namespace Illuminate\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

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
		$this->registerPresenceVerifier();

		$this->app->bindShared('validator', function($app)
		{
			$validator = new Factory($app['translator'], $app);

			// The validation presence verifier is responsible for determining the existence
			// of values in a given data collection, typically a relational database or
			// other persistent data stores. And it is used to check for uniqueness.
			if (isset($app['validation.presence']))
			{
				$validator->setPresenceVerifier($app['validation.presence']);
			}

			return $validator;
		});
	}

	/**
	 * Register the database presence verifier.
	 *
	 * @return void
	 */
	protected function registerPresenceVerifier()
	{
		$this->app->bindShared('validation.presence', function($app)
		{
			return new DatabasePresenceVerifier($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('validator', 'validation.presence');
	}

}
=======
<?php namespace Illuminate\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

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
		$this->registerPresenceVerifier();

		$this->app->bindShared('validator', function($app)
		{
			$validator = new Factory($app['translator'], $app);

			// The validation presence verifier is responsible for determining the existence
			// of values in a given data collection, typically a relational database or
			// other persistent data stores. And it is used to check for uniqueness.
			if (isset($app['validation.presence']))
			{
				$validator->setPresenceVerifier($app['validation.presence']);
			}

			return $validator;
		});
	}

	/**
	 * Register the database presence verifier.
	 *
	 * @return void
	 */
	protected function registerPresenceVerifier()
	{
		$this->app->bindShared('validation.presence', function($app)
		{
			return new DatabasePresenceVerifier($app['db']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('validator', 'validation.presence');
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
