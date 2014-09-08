<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
<<<<<<< HEAD
 * SessionHandlerInterface for PHP < 5.4
=======
 * SessionHandlerInterface
 *
 * Provides forward compatibility with PHP 5.4
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
 *
 * Extensive documentation can be found at php.net, see links:
 *
 * @see http://php.net/sessionhandlerinterface
 * @see http://php.net/session.customhandler
 * @see http://php.net/session-set-save-handler
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionHandlerInterface
{
    /**
<<<<<<< HEAD
     * Re-initializes existing session, or creates a new one.
     *
     * @see http://php.net/sessionhandlerinterface.open
     *
     * @param string $savePath    Save path
     * @param string $sessionName Session name, see http://php.net/function.session-name.php
     *
     * @return bool true on success, false on failure
=======
     * Open session.
     *
     * @see http://php.net/sessionhandlerinterface.open
     *
     * @param string $savePath    Save path.
     * @param string $sessionName Session Name.
     *
     * @throws \RuntimeException If something goes wrong starting the session.
     *
     * @return boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function open($savePath, $sessionName);

    /**
<<<<<<< HEAD
     * Closes the current session.
     *
     * @see http://php.net/sessionhandlerinterface.close
     *
     * @return bool true on success, false on failure
=======
     * Close session.
     *
     * @see http://php.net/sessionhandlerinterface.close
     *
     * @return boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function close();

    /**
<<<<<<< HEAD
     * Reads the session data.
     *
     * @see http://php.net/sessionhandlerinterface.read
     *
     * @param string $sessionId Session ID, see http://php.net/function.session-id
     *
     * @return string Same session data as passed in write() or empty string when non-existent or on failure
=======
     * Read session.
     *
     * @param string $sessionId
     *
     * @see http://php.net/sessionhandlerinterface.read
     *
     * @throws \RuntimeException On fatal error but not "record not found".
     *
     * @return string String as stored in persistent storage or empty string in all other cases.
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function read($sessionId);

    /**
<<<<<<< HEAD
     * Writes the session data to the storage.
     *
     * @see http://php.net/sessionhandlerinterface.write
     *
     * @param string $sessionId Session ID , see http://php.net/function.session-id
     * @param string $data      Serialized session data to save
     *
     * @return bool true on success, false on failure
=======
     * Commit session to storage.
     *
     * @see http://php.net/sessionhandlerinterface.write
     *
     * @param string $sessionId Session ID.
     * @param string $data      Session serialized data to save.
     *
     * @return boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function write($sessionId, $data);

    /**
<<<<<<< HEAD
     * Destroys a session.
     *
     * @see http://php.net/sessionhandlerinterface.destroy
     *
     * @param string $sessionId Session ID, see http://php.net/function.session-id
     *
     * @return bool true on success, false on failure
=======
     * Destroys this session.
     *
     * @see http://php.net/sessionhandlerinterface.destroy
     *
     * @param string $sessionId Session ID.
     *
     * @throws \RuntimeException On fatal error.
     *
     * @return boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function destroy($sessionId);

    /**
<<<<<<< HEAD
     * Cleans up expired sessions (garbage collection).
     *
     * @see http://php.net/sessionhandlerinterface.gc
     *
     * @param string|int $maxlifetime Sessions that have not updated for the last maxlifetime seconds will be removed
     *
     * @return bool true on success, false on failure
     */
    public function gc($maxlifetime);
=======
     * Garbage collection for storage.
     *
     * @see http://php.net/sessionhandlerinterface.gc
     *
     * @param integer $lifetime Max lifetime in seconds to keep sessions stored.
     *
     * @throws \RuntimeException On fatal error.
     *
     * @return boolean
     */
    public function gc($lifetime);
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
}
