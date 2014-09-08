<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Util;

/**
 * Interface that needs to be implemented by all secure random number generators.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface SecureRandomInterface
{
    /**
     * Generates the specified number of secure random bytes.
     *
<<<<<<< HEAD
     * @param int     $nbBytes
=======
     * @param integer $nbBytes
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @return string
     */
    public function nextBytes($nbBytes);
}
