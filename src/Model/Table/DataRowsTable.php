<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DataRows Model
 *
 * @property \App\Model\Table\DataSheetsTable|\Cake\ORM\Association\BelongsTo $DataSheets
 *
 * @method \App\Model\Entity\DataRow get($primaryKey, $options = [])
 * @method \App\Model\Entity\DataRow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DataRow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DataRow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DataRow|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DataRow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DataRow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DataRow findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DataRowsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('data_rows');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DataSheets', [
            'foreignKey' => 'data_sheet_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('seq')
            ->requirePresence('seq', 'create')
            ->notEmpty('seq');

        $validator
            ->scalar('office_center')
            ->maxLength('office_center', 100)
            ->allowEmpty('office_center');

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 100)
            ->requirePresence('fullname', 'create')
            ->notEmpty('fullname');

        $validator
            ->scalar('farmer_code')
            ->maxLength('farmer_code', 45)
            ->allowEmpty('farmer_code');

        $validator
            ->scalar('code')
            ->maxLength('code', 45)
            ->allowEmpty('code');

        $validator
            ->integer('year')
            ->allowEmpty('year');

        $validator
            ->scalar('plant_type')
            ->maxLength('plant_type', 45)
            ->allowEmpty('plant_type');

        $validator
            ->scalar('ppm_as')
            ->maxLength('ppm_as', 45)
            ->allowEmpty('ppm_as');

        $validator
            ->scalar('ppm_cd')
            ->maxLength('ppm_cd', 45)
            ->allowEmpty('ppm_cd');

        $validator
            ->scalar('ppm_pb')
            ->maxLength('ppm_pb', 45)
            ->allowEmpty('ppm_pb');

        $validator
            ->scalar('ppm_cr')
            ->maxLength('ppm_cr', 45)
            ->allowEmpty('ppm_cr');

        $validator
            ->scalar('ppm_hg')
            ->maxLength('ppm_hg', 45)
            ->allowEmpty('ppm_hg');

        $validator
            ->scalar('oc_item')
            ->maxLength('oc_item', 45)
            ->allowEmpty('oc_item');

        $validator
            ->scalar('oc_weight')
            ->maxLength('oc_weight', 45)
            ->allowEmpty('oc_weight');

        $validator
            ->scalar('py_item')
            ->maxLength('py_item', 45)
            ->allowEmpty('py_item');

        $validator
            ->scalar('py_weight')
            ->maxLength('py_weight', 45)
            ->allowEmpty('py_weight');

        $validator
            ->scalar('op_item')
            ->maxLength('op_item', 45)
            ->allowEmpty('op_item');

        $validator
            ->scalar('op_weight')
            ->maxLength('op_weight', 45)
            ->allowEmpty('op_weight');

        $validator
            ->scalar('ca_item')
            ->maxLength('ca_item', 45)
            ->allowEmpty('ca_item');

        $validator
            ->scalar('ca_weight')
            ->maxLength('ca_weight', 45)
            ->allowEmpty('ca_weight');

        $validator
            ->integer('coordinates_e')
            ->allowEmpty('coordinates_e');

        $validator
            ->integer('coordinates_n')
            ->allowEmpty('coordinates_n');

        $validator
            ->decimal('high')
            ->allowEmpty('high');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('coliform')
            ->maxLength('coliform', 45)
            ->allowEmpty('coliform');

        $validator
            ->scalar('fecal')
            ->maxLength('fecal', 45)
            ->allowEmpty('fecal');

        $validator
            ->scalar('nutrient_cu')
            ->maxLength('nutrient_cu', 45)
            ->allowEmpty('nutrient_cu');

        $validator
            ->scalar('nutrient_ca')
            ->maxLength('nutrient_ca', 45)
            ->allowEmpty('nutrient_ca');

        $validator
            ->scalar('chemical_do')
            ->maxLength('chemical_do', 45)
            ->allowEmpty('chemical_do');

        $validator
            ->scalar('chemical_bod')
            ->maxLength('chemical_bod', 45)
            ->allowEmpty('chemical_bod');

        $validator
            ->scalar('chemical_no3n')
            ->maxLength('chemical_no3n', 45)
            ->allowEmpty('chemical_no3n');

        $validator
            ->scalar('chemical_nh3n')
            ->maxLength('chemical_nh3n', 45)
            ->allowEmpty('chemical_nh3n');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['data_sheet_id'], 'DataSheets'));

        return $rules;
    }
}
