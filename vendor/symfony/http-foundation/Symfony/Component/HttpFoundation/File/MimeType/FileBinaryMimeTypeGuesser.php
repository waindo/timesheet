<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\File\MimeType;

use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

/**
 * Guesses the mime type with the binary "file" (only available on *nix)
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileBinaryMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private $cmd;

    /**
     * Constructor.
     *
     * The $cmd pattern must contain a "%s" string that will be replaced
     * with the file name to guess.
     *
     * The command output must start with the mime type of the file.
     *
     * @param string $cmd The command to run to get the mime type of a file
     */
    public function __construct($cmd = 'file -b --mime %s 2>/dev/null')
    {
        $this->cmd = $cmd;
    }

    /**
     * Returns whether this guesser is supported on the current OS
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public static function isSupported()
    {
        return !defined('PHP_WINDOWS_VERSION_BUILD') && function_exists('passthru') && function_exists('escapeshellarg');
    }

    /**
     * {@inheritdoc}
     */
    public function guess($path)
    {
        if (!is_file($path)) {
            throw new FileNotFoundException($path);
        }

        if (!is_readable($path)) {
            throw new AccessDeniedException($path);
        }

        if (!self::isSupported()) {
<<<<<<< HEAD
            return;
=======
            return null;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        ob_start();

        // need to use --mime instead of -i. see #6641
        passthru(sprintf($this->cmd, escapeshellarg($path)), $return);
        if ($return > 0) {
            ob_end_clean();

<<<<<<< HEAD
            return;
=======
            return null;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        $type = trim(ob_get_clean());

        if (!preg_match('#^([a-z0-9\-]+/[a-z0-9\-\.]+)#i', $type, $match)) {
            // it's not a type, but an error message
<<<<<<< HEAD
            return;
=======
            return null;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        return $match[1];
    }
}
