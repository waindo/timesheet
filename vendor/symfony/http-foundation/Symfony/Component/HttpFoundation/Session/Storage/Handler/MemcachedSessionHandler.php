<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
 * MemcachedSessionHandler.
 *
 * Memcached based session storage handler based on the Memcached class
 * provided by the PHP memcached extension.
 *
 * @see http://php.net/memcached
 *
 * @author Drak <drak@zikula.org>
 */
class MemcachedSessionHandler implements \SessionHandlerInterface
{
    /**
     * @var \Memcached Memcached driver.
     */
    private $memcached;

    /**
<<<<<<< HEAD
     * @var int     Time to live in seconds
=======
     * @var integer Time to live in seconds
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $ttl;

    /**
     * @var string Key prefix for shared environments.
     */
    private $prefix;

    /**
     * Constructor.
     *
     * List of available options:
     *  * prefix: The prefix to use for the memcached keys in order to avoid collision
     *  * expiretime: The time to live in seconds
     *
     * @param \Memcached $memcached A \Memcached instance
     * @param array      $options   An associative array of Memcached options
     *
     * @throws \InvalidArgumentException When unsupported options are passed
     */
    public function __construct(\Memcached $memcached, array $options = array())
    {
        $this->memcached = $memcached;

        if ($diff = array_diff(array_keys($options), array('prefix', 'expiretime'))) {
            throw new \InvalidArgumentException(sprintf(
                'The following options are not supported "%s"', implode(', ', $diff)
            ));
        }

        $this->ttl = isset($options['expiretime']) ? (int) $options['expiretime'] : 86400;
        $this->prefix = isset($options['prefix']) ? $options['prefix'] : 'sf2s';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function open($savePath, $sessionName)
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function close()
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function read($sessionId)
    {
        return $this->memcached->get($this->prefix.$sessionId) ?: '';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function write($sessionId, $data)
    {
        return $this->memcached->set($this->prefix.$sessionId, $data, time() + $this->ttl);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function destroy($sessionId)
    {
        return $this->memcached->delete($this->prefix.$sessionId);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function gc($maxlifetime)
=======
     * {@inheritDoc}
     */
    public function gc($lifetime)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
    {
        // not required here because memcached will auto expire the records anyhow.
        return true;
    }

    /**
     * Return a Memcached instance
     *
     * @return \Memcached
     */
    protected function getMemcached()
    {
        return $this->memcached;
    }
}
