<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;

/**
 * OutputInterface is the interface implemented by all Output classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @api
 */
interface OutputInterface
{
    const VERBOSITY_QUIET        = 0;
    const VERBOSITY_NORMAL       = 1;
    const VERBOSITY_VERBOSE      = 2;
    const VERBOSITY_VERY_VERBOSE = 3;
    const VERBOSITY_DEBUG        = 4;

    const OUTPUT_NORMAL = 0;
    const OUTPUT_RAW    = 1;
    const OUTPUT_PLAIN  = 2;

    /**
     * Writes a message to the output.
     *
     * @param string|array $messages The message as an array of lines or a single string
<<<<<<< HEAD
     * @param bool         $newline  Whether to add a newline
     * @param int          $type     The type of output (one of the OUTPUT constants)
=======
     * @param Boolean      $newline  Whether to add a newline
     * @param integer      $type     The type of output (one of the OUTPUT constants)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @throws \InvalidArgumentException When unknown output type is given
     *
     * @api
     */
    public function write($messages, $newline = false, $type = self::OUTPUT_NORMAL);

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string|array $messages The message as an array of lines of a single string
<<<<<<< HEAD
     * @param int          $type     The type of output (one of the OUTPUT constants)
=======
     * @param integer      $type     The type of output (one of the OUTPUT constants)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @throws \InvalidArgumentException When unknown output type is given
     *
     * @api
     */
    public function writeln($messages, $type = self::OUTPUT_NORMAL);

    /**
     * Sets the verbosity of the output.
     *
<<<<<<< HEAD
     * @param int     $level The level of verbosity (one of the VERBOSITY constants)
=======
     * @param integer $level The level of verbosity (one of the VERBOSITY constants)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @api
     */
    public function setVerbosity($level);

    /**
     * Gets the current verbosity of the output.
     *
<<<<<<< HEAD
     * @return int     The current level of verbosity (one of the VERBOSITY constants)
=======
     * @return integer The current level of verbosity (one of the VERBOSITY constants)
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @api
     */
    public function getVerbosity();

    /**
     * Sets the decorated flag.
     *
<<<<<<< HEAD
     * @param bool    $decorated Whether to decorate the messages
=======
     * @param Boolean $decorated Whether to decorate the messages
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @api
     */
    public function setDecorated($decorated);

    /**
     * Gets the decorated flag.
     *
<<<<<<< HEAD
     * @return bool    true if the output will decorate messages, false otherwise
=======
     * @return Boolean true if the output will decorate messages, false otherwise
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     *
     * @api
     */
    public function isDecorated();

    /**
     * Sets output formatter.
     *
     * @param OutputFormatterInterface $formatter
     *
     * @api
     */
    public function setFormatter(OutputFormatterInterface $formatter);

    /**
     * Returns current output formatter instance.
     *
     * @return  OutputFormatterInterface
     *
     * @api
     */
    public function getFormatter();
}
