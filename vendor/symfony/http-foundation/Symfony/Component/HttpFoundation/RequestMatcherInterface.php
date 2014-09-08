<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation;

/**
 * RequestMatcherInterface is an interface for strategies to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @api
 */
interface RequestMatcherInterface
{
    /**
     * Decides whether the rule(s) implemented by the strategy matches the supplied request.
     *
     * @param Request $request The request to check for a match
     *
<<<<<<< HEAD
     * @return bool    true if the request matches, false otherwise
=======
     * @return Boolean true if the request matches, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @api
     */
    public function matches(Request $request);
}
