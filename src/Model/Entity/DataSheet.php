<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Datasheet Entity
 *
 * @property string $id
 * @property string $name
 * @property int $seq
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $data_id
 *
 * @property \App\Model\Entity\Data $data
 * @property \App\Model\Entity\DataRow[] $data_rows
 */
class Datasheet extends Entity
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
        'seq' => true,
        'created' => true,
        'modified' => true,
        'data_id' => true,
        'datas' => true,
        'data_rows' => true
    ];
}
