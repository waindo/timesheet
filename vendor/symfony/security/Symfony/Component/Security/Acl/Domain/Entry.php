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
use Symfony\Component\Security\Acl\Model\AuditableEntryInterface;
use Symfony\Component\Security\Acl\Model\SecurityIdentityInterface;

/**
 * Auditable ACE implementation
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Entry implements AuditableEntryInterface
{
    private $acl;
    private $mask;
    private $id;
    private $securityIdentity;
    private $strategy;
    private $auditFailure;
    private $auditSuccess;
    private $granting;

    /**
     * Constructor
     *
<<<<<<< HEAD
     * @param int                       $id
     * @param AclInterface              $acl
     * @param SecurityIdentityInterface $sid
     * @param string                    $strategy
     * @param int                       $mask
     * @param bool                      $granting
     * @param bool                      $auditFailure
     * @param bool                      $auditSuccess
=======
     * @param integer                   $id
     * @param AclInterface              $acl
     * @param SecurityIdentityInterface $sid
     * @param string                    $strategy
     * @param integer                   $mask
     * @param Boolean                   $granting
     * @param Boolean                   $auditFailure
     * @param Boolean                   $auditSuccess
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function __construct($id, AclInterface $acl, SecurityIdentityInterface $sid, $strategy, $mask, $granting, $auditFailure, $auditSuccess)
    {
        $this->id = $id;
        $this->acl = $acl;
        $this->securityIdentity = $sid;
        $this->strategy = $strategy;
        $this->mask = $mask;
        $this->granting = $granting;
        $this->auditFailure = $auditFailure;
        $this->auditSuccess = $auditSuccess;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getId()
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getSecurityIdentity()
    {
        return $this->securityIdentity;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isAuditFailure()
    {
        return $this->auditFailure;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isAuditSuccess()
    {
        return $this->auditSuccess;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isGranting()
    {
        return $this->granting;
    }

    /**
     * Turns on/off auditing on permissions denials.
     *
     * Do never call this method directly. Use the respective methods on the
     * AclInterface instead.
     *
<<<<<<< HEAD
     * @param bool    $boolean
=======
     * @param Boolean $boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function setAuditFailure($boolean)
    {
        $this->auditFailure = $boolean;
    }

    /**
     * Turns on/off auditing on permission grants.
     *
     * Do never call this method directly. Use the respective methods on the
     * AclInterface instead.
     *
<<<<<<< HEAD
     * @param bool    $boolean
=======
     * @param Boolean $boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function setAuditSuccess($boolean)
    {
        $this->auditSuccess = $boolean;
    }

    /**
     * Sets the permission mask
     *
     * Do never call this method directly. Use the respective methods on the
     * AclInterface instead.
     *
<<<<<<< HEAD
     * @param int     $mask
=======
     * @param integer $mask
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
    }

    /**
     * Sets the mask comparison strategy
     *
     * Do never call this method directly. Use the respective methods on the
     * AclInterface instead.
     *
     * @param string $strategy
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Implementation of \Serializable
     *
     * @return string
     */
    public function serialize()
    {
        return serialize(array(
            $this->mask,
            $this->id,
            $this->securityIdentity,
            $this->strategy,
            $this->auditFailure,
            $this->auditSuccess,
            $this->granting,
        ));
    }

    /**
     * Implementation of \Serializable
     *
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list($this->mask,
             $this->id,
             $this->securityIdentity,
             $this->strategy,
             $this->auditFailure,
             $this->auditSuccess,
             $this->granting
        ) = unserialize($serialized);
    }
}
