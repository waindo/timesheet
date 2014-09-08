<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheWarmer;

/**
 * Interface for classes able to warm up the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface CacheWarmerInterface extends WarmableInterface
{
    /**
     * Checks whether this warmer is optional or not.
     *
     * Optional warmers can be ignored on certain conditions.
     *
     * A warmer should return true if the cache can be
     * generated incrementally and on-demand.
     *
<<<<<<< HEAD
     * @return bool    true if the warmer is optional, false otherwise
=======
     * @return Boolean true if the warmer is optional, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isOptional();
}
