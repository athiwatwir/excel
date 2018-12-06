<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DataRow Entity
 *
 * @property string $id
 * @property int $seq
 * @property string $office_center
 * @property string $fullname
 * @property string $farmer_code
 * @property string $code
 * @property int $year
 * @property string $plant_type
 * @property string $ppm_as
 * @property string $ppm_cd
 * @property string $ppm_pb
 * @property string $ppm_cr
 * @property string $ppm_hg
 * @property string $oc_item
 * @property string $oc_weight
 * @property string $py_item
 * @property string $py_weight
 * @property string $op_item
 * @property string $op_weight
 * @property string $ca_item
 * @property string $ca_weight
 * @property int $coordinates_e
 * @property int $coordinates_n
 * @property float $high
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property string $coliform
 * @property string $fecal
 * @property string $nutrient_cu
 * @property string $nutrient_ca
 * @property string $chemical_do
 * @property string $chemical_bod
 * @property string $chemical_no3n
 * @property string $chemical_nh3n
 * @property string $data_sheet_id
 *
 * @property \App\Model\Entity\DataSheet $data_sheet
 */
class DataRow extends Entity
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
        'seq' => true,
        'office_center' => true,
        'fullname' => true,
        'farmer_code' => true,
        'code' => true,
        'year' => true,
        'plant_type' => true,
        'ppm_as' => true,
        'ppm_cd' => true,
        'ppm_pb' => true,
        'ppm_cr' => true,
        'ppm_hg' => true,
        'oc_item' => true,
        'oc_weight' => true,
        'py_item' => true,
        'py_weight' => true,
        'op_item' => true,
        'op_weight' => true,
        'ca_item' => true,
        'ca_weight' => true,
        'coordinates_e' => true,
        'coordinates_n' => true,
        'high' => true,
        'description' => true,
        'created' => true,
        'coliform' => true,
        'fecal' => true,
        'nutrient_cu' => true,
        'nutrient_ca' => true,
        'chemical_do' => true,
        'chemical_bod' => true,
        'chemical_no3n' => true,
        'chemical_nh3n' => true,
        'data_sheet_id' => true,
        'data_sheet' => true
    ];
}
