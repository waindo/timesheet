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

use Symfony\Component\Security\Acl\Exception\InvalidDomainObjectException;
use Symfony\Component\Security\Acl\Model\ObjectIdentityRetrievalStrategyInterface;

/**
 * Strategy to be used for retrieving object identities from domain objects
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ObjectIdentityRetrievalStrategy implements ObjectIdentityRetrievalStrategyInterface
{
    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * {@inheritDoc}
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function getObjectIdentity($domainObject)
    {
        try {
            return ObjectIdentity::fromDomainObject($domainObject);
        } catch (InvalidDomainObjectException $failed) {
<<<<<<< HEAD
            return;
=======
            return null;
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
        }
    }
}
