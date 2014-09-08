<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * UnauthorizedHttpException.
 *
 * @author Ben Ramsey <ben@benramsey.com>
 */
class UnauthorizedHttpException extends HttpException
{
    /**
     * Constructor.
     *
     * @param string     $challenge WWW-Authenticate challenge string
     * @param string     $message   The internal exception message
     * @param \Exception $previous  The previous exception
<<<<<<< HEAD
     * @param int        $code      The internal exception code
=======
     * @param integer    $code      The internal exception code
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function __construct($challenge, $message = null, \Exception $previous = null, $code = 0)
    {
        $headers = array('WWW-Authenticate' => $challenge);

        parent::__construct(401, $message, $previous, $headers, $code);
    }
}
