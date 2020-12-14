<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $group_id
 * @property string $email
 * @property string $password
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $locale
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Log[] $logs
 * @property \App\Model\Entity\MailingList[] $mailing_lists
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'group_id' => true,
        'email' => true,
        'password' => true,
        'token' => true,
        'created' => true,
        'modified' => true,
        'first_name' => true,
        'last_name' => true,
        'locale' => true,
        'group' => true,
        'logs' => true,
        'mailing_lists' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token',
    ];
}
