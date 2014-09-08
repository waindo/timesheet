<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Extends the \RecursiveDirectoryIterator to support relative paths
 *
 * @author Victor Berchet <victor@suumit.com>
 */
class RecursiveDirectoryIterator extends \RecursiveDirectoryIterator
{
    /**
<<<<<<< HEAD
     * @var bool
=======
     * @var boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $ignoreUnreadableDirs;

    /**
<<<<<<< HEAD
     * @var bool
=======
     * @var Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    private $rewindable;

    /**
     * Constructor.
     *
     * @param string  $path
     * @param int     $flags
<<<<<<< HEAD
     * @param bool    $ignoreUnreadableDirs
=======
     * @param boolean $ignoreUnreadableDirs
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @throws \RuntimeException
     */
    public function __construct($path, $flags, $ignoreUnreadableDirs = false)
    {
        if ($flags & (self::CURRENT_AS_PATHNAME | self::CURRENT_AS_SELF)) {
            throw new \RuntimeException('This iterator only support returning current as fileinfo.');
        }

        parent::__construct($path, $flags);
        $this->ignoreUnreadableDirs = $ignoreUnreadableDirs;
    }

    /**
     * Return an instance of SplFileInfo with support for relative paths
     *
     * @return SplFileInfo File information
     */
    public function current()
    {
        return new SplFileInfo(parent::current()->getPathname(), $this->getSubPath(), $this->getSubPathname());
    }

    /**
     * @return \RecursiveIterator
     *
     * @throws AccessDeniedException
     */
    public function getChildren()
    {
        try {
<<<<<<< HEAD
            $children = parent::getChildren();

            if ($children instanceof self) {
                // parent method will call the constructor with default arguments, so unreadable dirs won't be ignored anymore
                $children->ignoreUnreadableDirs = $this->ignoreUnreadableDirs;
            }

            return $children;
=======
            return parent::getChildren();
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        } catch (\UnexpectedValueException $e) {
            if ($this->ignoreUnreadableDirs) {
                // If directory is unreadable and finder is set to ignore it, a fake empty content is returned.
                return new \RecursiveArrayIterator(array());
            } else {
                throw new AccessDeniedException($e->getMessage(), $e->getCode(), $e);
            }
        }
    }

    /**
     * Do nothing for non rewindable stream
     */
    public function rewind()
    {
        if (false === $this->isRewindable()) {
            return;
        }

        // @see https://bugs.php.net/bug.php?id=49104
        parent::next();

        parent::rewind();
    }

    /**
     * Checks if the stream is rewindable.
     *
<<<<<<< HEAD
     * @return bool    true when the stream is rewindable, false otherwise
=======
     * @return Boolean true when the stream is rewindable, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isRewindable()
    {
        if (null !== $this->rewindable) {
            return $this->rewindable;
        }

        if (false !== $stream = @opendir($this->getPath())) {
            $infos = stream_get_meta_data($stream);
            closedir($stream);

            if ($infos['seekable']) {
                return $this->rewindable = true;
            }
        }

        return $this->rewindable = false;
    }
}
