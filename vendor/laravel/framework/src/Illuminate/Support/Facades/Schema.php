<<<<<<< HEAD
<?php namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade {

	/**
	 * Get a schema builder instance for a connection.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Database\Schema\Builder
	 */
	public static function connection($name)
	{
		return static::$app['db']->connection($name)->getSchemaBuilder();
	}

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$app['db']->connection()->getSchemaBuilder();
	}

}
=======
<?php namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Database\Schema\Builder
 */
class Schema extends Facade {

	/**
	 * Get a schema builder instance for a connection.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Database\Schema\Builder
	 */
	public static function connection($name)
	{
		return static::$app['db']->connection($name)->getSchemaBuilder();
	}

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$app['db']->connection()->getSchemaBuilder();
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
