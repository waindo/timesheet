<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Model;

/**
 * Interface for audit loggers
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AuditLoggerInterface
{
    /**
     * This method is called whenever access is granted, or denied, and
     * administrative mode is turned off.
     *
<<<<<<< HEAD
     * @param bool           $granted
=======
     * @param Boolean        $granted
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     * @param EntryInterface $ace
     */
    public function logIfNeeded($granted, EntryInterface $ace);
}
