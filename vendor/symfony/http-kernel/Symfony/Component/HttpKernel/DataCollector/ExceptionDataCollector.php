<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\FlattenException;

/**
 * ExceptionDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExceptionDataCollector extends DataCollector
{
    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        if (null !== $exception) {
            $this->data = array(
                'exception' => FlattenException::create($exception),
            );
        }
    }

    /**
     * Checks if the exception is not null.
     *
<<<<<<< HEAD
     * @return bool    true if the exception is not null, false otherwise
=======
     * @return Boolean true if the exception is not null, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function hasException()
    {
        return isset($this->data['exception']);
    }

    /**
     * Gets the exception.
     *
     * @return \Exception The exception
     */
    public function getException()
    {
        return $this->data['exception'];
    }

    /**
     * Gets the exception message.
     *
     * @return string The exception message
     */
    public function getMessage()
    {
        return $this->data['exception']->getMessage();
    }

    /**
     * Gets the exception code.
     *
<<<<<<< HEAD
     * @return int     The exception code
=======
     * @return integer The exception code
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getCode()
    {
        return $this->data['exception']->getCode();
    }

    /**
     * Gets the status code.
     *
<<<<<<< HEAD
     * @return int     The status code
=======
     * @return integer The status code
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getStatusCode()
    {
        return $this->data['exception']->getStatusCode();
    }

    /**
     * Gets the exception trace.
     *
     * @return array The exception trace
     */
    public function getTrace()
    {
        return $this->data['exception']->getTrace();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'exception';
    }
}
