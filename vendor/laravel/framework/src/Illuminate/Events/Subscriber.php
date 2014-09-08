<<<<<<< HEAD
<?php namespace Illuminate\Events;

class Subscriber {

	/**
	 * Get the events listened to by the subscriber.
	 *
	 * @return array
	 */
	public static function subscribes()
	{
		return array();
	}

	/**
	 * Get the events listened to by the subscriber.
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return static::subscribes();
	}

}
=======
<?php namespace Illuminate\Events;

class Subscriber {

	/**
	 * Get the events listened to by the subscriber.
	 *
	 * @return array
	 */
	public static function subscribes()
	{
		return array();
	}

	/**
	 * Get the events listened to by the subscriber.
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return static::subscribes();
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
