<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Core\Encoder;

/**
 * PasswordEncoderInterface is the interface for all encoders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface PasswordEncoderInterface
{
    /**
     * Encodes the raw password.
     *
     * @param string $raw  The password to encode
     * @param string $salt The salt
     *
     * @return string The encoded password
     */
    public function encodePassword($raw, $salt);

    /**
     * Checks a raw password against an encoded password.
     *
     * @param string $encoded An encoded password
     * @param string $raw     A raw password
     * @param string $salt    The salt
     *
<<<<<<< HEAD
     * @return bool    true if the password is valid, false otherwise
=======
     * @return Boolean true if the password is valid, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isPasswordValid($encoded, $raw, $salt);
}
