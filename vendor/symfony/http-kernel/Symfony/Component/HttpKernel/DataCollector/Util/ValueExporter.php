<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector\Util;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValueExporter
{
    /**
     * Converts a PHP value to a string.
     *
     * @param mixed $value The PHP value
     *
     * @return string The string representation of the given value
     */
    public function exportValue($value)
    {
        if (is_object($value)) {
            return sprintf('Object(%s)', get_class($value));
        }

        if (is_array($value)) {
            $a = array();
            foreach ($value as $k => $v) {
                $a[] = sprintf('%s => %s', $k, $this->exportValue($v));
            }

            return sprintf("Array(%s)", implode(', ', $a));
        }

        if (is_resource($value)) {
<<<<<<< HEAD
            return sprintf('Resource(%s#%d)', get_resource_type($value), $value);
=======
            return sprintf('Resource(%s)', get_resource_type($value));
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }

        if (null === $value) {
            return 'null';
        }

        if (false === $value) {
            return 'false';
        }

        if (true === $value) {
            return 'true';
        }

        return (string) $value;
    }
}
