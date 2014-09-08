<<<<<<< HEAD
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			return new Encrypter($app['config']['app.key']);
		});
	}

}
=======
<?php namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;

class EncryptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('encrypter', function($app)
		{
			return new Encrypter($app['config']['app.key']);
		});
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
