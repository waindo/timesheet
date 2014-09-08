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
 * This interface adds auditing capabilities to the ACL.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AuditableAclInterface extends MutableAclInterface
{
    /**
     * Updates auditing for class-based ACE
     *
<<<<<<< HEAD
     * @param int     $index
     * @param bool    $auditSuccess
     * @param bool    $auditFailure
=======
     * @param integer $index
     * @param Boolean $auditSuccess
     * @param Boolean $auditFailure
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function updateClassAuditing($index, $auditSuccess, $auditFailure);

    /**
     * Updates auditing for class-field-based ACE
     *
<<<<<<< HEAD
     * @param int     $index
     * @param string  $field
     * @param bool    $auditSuccess
     * @param bool    $auditFailure
=======
     * @param integer $index
     * @param string  $field
     * @param Boolean $auditSuccess
     * @param Boolean $auditFailure
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function updateClassFieldAuditing($index, $field, $auditSuccess, $auditFailure);

    /**
     * Updates auditing for object-based ACE
     *
<<<<<<< HEAD
     * @param int     $index
     * @param bool    $auditSuccess
     * @param bool    $auditFailure
=======
     * @param integer $index
     * @param Boolean $auditSuccess
     * @param Boolean $auditFailure
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function updateObjectAuditing($index, $auditSuccess, $auditFailure);

    /**
     * Updates auditing for object-field-based ACE
     *
<<<<<<< HEAD
     * @param int     $index
     * @param string  $field
     * @param bool    $auditSuccess
     * @param bool    $auditFailure
=======
     * @param integer $index
     * @param string  $field
     * @param Boolean $auditSuccess
     * @param Boolean $auditFailure
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function updateObjectFieldAuditing($index, $field, $auditSuccess, $auditFailure);
}
