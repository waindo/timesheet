<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy;

/**
 * AbstractProxy.
 *
 * @author Drak <drak@zikula.org>
 */
abstract class AbstractProxy
{
    /**
     * Flag if handler wraps an internal PHP session handler (using \SessionHandler).
     *
<<<<<<< HEAD
     * @var bool
=======
     * @var boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    protected $wrapper = false;

    /**
<<<<<<< HEAD
     * @var bool
=======
     * @var boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    protected $active = false;

    /**
     * @var string
     */
    protected $saveHandlerName;

    /**
     * Gets the session.save_handler name.
     *
     * @return string
     */
    public function getSaveHandlerName()
    {
        return $this->saveHandlerName;
    }

    /**
     * Is this proxy handler and instance of \SessionHandlerInterface.
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isSessionHandlerInterface()
    {
        return ($this instanceof \SessionHandlerInterface);
    }

    /**
     * Returns true if this handler wraps an internal PHP session save handler using \SessionHandler.
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isWrapper()
    {
        return $this->wrapper;
    }

    /**
     * Has a session started?
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isActive()
    {
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            return $this->active = \PHP_SESSION_ACTIVE === session_status();
        }

        return $this->active;
    }

    /**
     * Sets the active flag.
     *
     * Has no effect under PHP 5.4+ as status is detected
     * automatically in isActive()
     *
     * @internal
     *
<<<<<<< HEAD
     * @param bool    $flag
=======
     * @param Boolean $flag
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @throws \LogicException
     */
    public function setActive($flag)
    {
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            throw new \LogicException('This method is disabled in PHP 5.4.0+');
        }

        $this->active = (bool) $flag;
    }

    /**
     * Gets the session ID.
     *
     * @return string
     */
    public function getId()
    {
        return session_id();
    }

    /**
     * Sets the session ID.
     *
     * @param string $id
     *
     * @throws \LogicException
     */
    public function setId($id)
    {
        if ($this->isActive()) {
            throw new \LogicException('Cannot change the ID of an active session');
        }

        session_id($id);
    }

    /**
     * Gets the session name.
     *
     * @return string
     */
    public function getName()
    {
        return session_name();
    }

    /**
     * Sets the session name.
     *
     * @param string $name
     *
     * @throws \LogicException
     */
    public function setName($name)
    {
        if ($this->isActive()) {
            throw new \LogicException('Cannot change the name of an active session');
        }

        session_name($name);
    }
}
