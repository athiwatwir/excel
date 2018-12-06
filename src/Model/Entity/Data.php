<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Data Entity
 *
 * @property string $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $user_id
 * @property string $description
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\DataSheet[] $data_sheets
 */
class Data extends Entity
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
        'name' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'description' => true,
        'user' => true,
        'data_sheets' => true
    ];
}
