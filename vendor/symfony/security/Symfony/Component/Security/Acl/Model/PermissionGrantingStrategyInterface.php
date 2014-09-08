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
 * Interface used by permission granting implementations.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface PermissionGrantingStrategyInterface
{
    /**
     * Determines whether access to a domain object is to be granted
     *
     * @param AclInterface $acl
     * @param array        $masks
     * @param array        $sids
<<<<<<< HEAD
     * @param bool         $administrativeMode
     * @return bool
=======
     * @param Boolean      $administrativeMode
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isGranted(AclInterface $acl, array $masks, array $sids, $administrativeMode = false);

    /**
     * Determines whether access to a domain object's field is to be granted
     *
     * @param AclInterface $acl
     * @param string       $field
     * @param array        $masks
     * @param array        $sids
<<<<<<< HEAD
     * @param bool         $administrativeMode
     *
     * @return bool
=======
     * @param Boolean      $administrativeMode
     *
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isFieldGranted(AclInterface $acl, $field, array $masks, array $sids, $administrativeMode = false);
}
