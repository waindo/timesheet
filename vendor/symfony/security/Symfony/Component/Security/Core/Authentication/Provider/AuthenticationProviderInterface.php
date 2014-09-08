<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;

/**
 * AuthenticationProviderInterface is the interface for all authentication
 * providers.
 *
 * Concrete implementations processes specific Token instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface AuthenticationProviderInterface extends AuthenticationManagerInterface
{
    /**
     * Checks whether this provider supports the given token.
     *
     * @param TokenInterface $token A TokenInterface instance
     *
<<<<<<< HEAD
     * @return bool    true if the implementation supports the Token, false otherwise
=======
     * @return Boolean true if the implementation supports the Token, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
     public function supports(TokenInterface $token);
}
