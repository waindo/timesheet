<<<<<<< HEAD
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\BeanstalkdQueue;
use Pheanstalk_Pheanstalk as Pheanstalk;

class BeanstalkdConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		$pheanstalk = new Pheanstalk($config['host']);

		return new BeanstalkdQueue(
			$pheanstalk, $config['queue'], array_get($config, 'ttr', Pheanstalk::DEFAULT_TTR)
		);
	}

}
=======
<?php namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\BeanstalkdQueue;
use Pheanstalk_Pheanstalk as Pheanstalk;

class BeanstalkdConnector implements ConnectorInterface {

	/**
	 * Establish a queue connection.
	 *
	 * @param  array  $config
	 * @return \Illuminate\Queue\QueueInterface
	 */
	public function connect(array $config)
	{
		$pheanstalk = new Pheanstalk($config['host']);

		return new BeanstalkdQueue(
			$pheanstalk, $config['queue'], array_get($config, 'ttr', Pheanstalk::DEFAULT_TTR)
		);
	}

}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
