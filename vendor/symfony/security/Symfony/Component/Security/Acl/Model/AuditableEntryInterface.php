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
 * ACEs can implement this interface if they support auditing capabilities.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface AuditableEntryInterface extends EntryInterface
{
    /**
     * Whether auditing for successful grants is turned on
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isAuditFailure();

    /**
     * Whether auditing for successful denies is turned on
     *
<<<<<<< HEAD
     * @return bool
=======
     * @return Boolean
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
     */
    public function isAuditSuccess();
}
