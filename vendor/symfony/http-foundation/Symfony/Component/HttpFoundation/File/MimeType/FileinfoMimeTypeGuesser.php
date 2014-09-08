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
 * Guesses the mime type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FileinfoMimeTypeGuesser implements MimeTypeGuesserInterface
{
    private $magicFile;

    /**
     * Constructor.
     *
     * @param string $magicFile A magic file to use with the finfo instance
     *
     * @link http://www.php.net/manual/en/function.finfo-open.php
     */
    public function __construct($magicFile = null)
    {
        $this->magicFile = $magicFile;
    }

    /**
     * Returns whether this guesser is supported on the current OS/PHP setup
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public static function isSupported()
    {
        return function_exists('finfo_open');
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
        }

        if (!$finfo = new \finfo(FILEINFO_MIME_TYPE, $this->magicFile)) {
            return;
=======
            return null;
        }

        if (!$finfo = new \finfo(FILEINFO_MIME_TYPE, $this->magicFile)) {
            return null;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        return $finfo->file($path);
    }
}
