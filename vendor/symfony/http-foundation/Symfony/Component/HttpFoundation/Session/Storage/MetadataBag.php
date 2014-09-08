<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage;

use Symfony\Component\HttpFoundation\Session\SessionBagInterface;

/**
 * Metadata container.
 *
 * Adds metadata to the session.
 *
 * @author Drak <drak@zikula.org>
 */
class MetadataBag implements SessionBagInterface
{
    const CREATED = 'c';
    const UPDATED = 'u';
    const LIFETIME = 'l';

    /**
     * @var string
     */
    private $name = '__metadata';

    /**
     * @var string
     */
    private $storageKey;

    /**
     * @var array
     */
    protected $meta = array(self::CREATED => 0, self::UPDATED => 0, self::LIFETIME => 0);

    /**
     * Unix timestamp.
     *
<<<<<<< HEAD
     * @var int
=======
     * @var integer
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $lastUsed;

    /**
<<<<<<< HEAD
     * @var int
=======
     * @var integer
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $updateThreshold;

    /**
     * Constructor.
     *
     * @param string  $storageKey      The key used to store bag in the session.
<<<<<<< HEAD
     * @param int     $updateThreshold The time to wait between two UPDATED updates
=======
     * @param integer $updateThreshold The time to wait between two UPDATED updates
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function __construct($storageKey = '_sf2_meta', $updateThreshold = 0)
    {
        $this->storageKey = $storageKey;
        $this->updateThreshold = $updateThreshold;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &$array)
    {
        $this->meta = &$array;

        if (isset($array[self::CREATED])) {
            $this->lastUsed = $this->meta[self::UPDATED];

            $timeStamp = time();
            if ($timeStamp - $array[self::UPDATED] >= $this->updateThreshold) {
                $this->meta[self::UPDATED] = $timeStamp;
            }
        } else {
            $this->stampCreated();
        }
    }

    /**
     * Gets the lifetime that the session cookie was set with.
     *
<<<<<<< HEAD
     * @return int
=======
     * @return integer
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getLifetime()
    {
        return $this->meta[self::LIFETIME];
    }

    /**
     * Stamps a new session's metadata.
     *
<<<<<<< HEAD
     * @param int     $lifetime Sets the cookie lifetime for the session cookie. A null value
=======
     * @param integer $lifetime Sets the cookie lifetime for the session cookie. A null value
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *                          will leave the system settings unchanged, 0 sets the cookie
     *                          to expire with browser session. Time is in seconds, and is
     *                          not a Unix timestamp.
     */
    public function stampNew($lifetime = null)
    {
        $this->stampCreated($lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return $this->storageKey;
    }

    /**
     * Gets the created timestamp metadata.
     *
<<<<<<< HEAD
     * @return int     Unix timestamp
=======
     * @return integer Unix timestamp
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getCreated()
    {
        return $this->meta[self::CREATED];
    }

    /**
     * Gets the last used metadata.
     *
<<<<<<< HEAD
     * @return int     Unix timestamp
=======
     * @return integer Unix timestamp
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getLastUsed()
    {
        return $this->lastUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        // nothing to do
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    private function stampCreated($lifetime = null)
    {
        $timeStamp = time();
        $this->meta[self::CREATED] = $this->meta[self::UPDATED] = $this->lastUsed = $timeStamp;
        $this->meta[self::LIFETIME] = (null === $lifetime) ? ini_get('session.cookie_lifetime') : $lifetime;
    }
}
