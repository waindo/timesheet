<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Domain;

use Symfony\Component\Security\Acl\Model\AclInterface;
use Symfony\Component\Security\Acl\Model\FieldEntryInterface;
use Symfony\Component\Security\Acl\Model\SecurityIdentityInterface;

/**
 * Field-aware ACE implementation which is auditable
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class FieldEntry extends Entry implements FieldEntryInterface
{
    private $field;

    /**
     * Constructor
     *
<<<<<<< HEAD
     * @param int                       $id
=======
     * @param integer                   $id
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     * @param AclInterface              $acl
     * @param string                    $field
     * @param SecurityIdentityInterface $sid
     * @param string                    $strategy
<<<<<<< HEAD
     * @param int                       $mask
     * @param bool                      $granting
     * @param bool                      $auditFailure
     * @param bool                      $auditSuccess
=======
     * @param integer                   $mask
     * @param Boolean                   $granting
     * @param Boolean                   $auditFailure
     * @param Boolean                   $auditSuccess
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function __construct($id, AclInterface $acl, $field, SecurityIdentityInterface $sid, $strategy, $mask, $granting, $auditFailure, $auditSuccess)
    {
        parent::__construct($id, $acl, $sid, $strategy, $mask, $granting, $auditFailure, $auditSuccess);

        $this->field = $field;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getField()
    {
        return $this->field;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function serialize()
    {
        return serialize(array(
            $this->field,
            parent::serialize(),
        ));
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function unserialize($serialized)
    {
        list($this->field, $parentStr) = unserialize($serialized);
        parent::unserialize($parentStr);
    }
}
