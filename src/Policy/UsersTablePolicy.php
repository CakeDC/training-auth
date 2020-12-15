<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\UsersTable;
use Authorization\IdentityInterface;
use Cake\ORM\Query;

/**
 * UsersTable policy
 */
class UsersTablePolicy
{
    public function canIndex(IdentityInterface $user, Query $query)
    {
        return true;
    }

    public function scopeIndex(IdentityInterface $user, Query $query)
    {
        // scope to filter tournaments for a logged in user
        $groupId = $user->group_id ?? null;
        if (!$groupId) {
            return $query;
        }

        return $query->where(['Users.group_id' => $groupId]);
    }
}
