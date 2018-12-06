<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datasheets Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Data
 * @property \App\Model\Table\DataRowsTable|\Cake\ORM\Association\HasMany $DataRows
 *
 * @method \App\Model\Entity\Datasheet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Datasheet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Datasheet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datasheet|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datasheet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DatasheetsTable extends Table
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

        $this->setTable('data_sheets');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Datas', [
            'foreignKey' => 'data_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DataRows', [
            'foreignKey' => 'data_sheet_id'
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('seq')
            ->allowEmpty('seq');

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
        $rules->add($rules->existsIn(['data_id'], 'Datas'));

        return $rules;
    }
}
