<<<<<<< HEAD
<?php namespace Illuminate\Filesystem;

use Illuminate\Support\ServiceProvider;

class FilesystemServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('files', function() { return new Filesystem; });
	}

}
=======
<?php namespace Illuminate\Filesystem;

use Illuminate\Support\ServiceProvider;

class FilesystemServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('files', function() { return new Filesystem; });
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
