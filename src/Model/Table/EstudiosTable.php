<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estudios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\BelongsTo $Pedidos
 * @property \Cake\ORM\Association\HasMany $Pedidos
 *
 * @method \App\Model\Entity\Estudio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estudio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estudio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estudio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estudio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estudio findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstudiosTable extends Table
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

        $this->table('estudios');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pedidos', [
            'foreignKey' => 'pedido_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pedidos', [
            'foreignKey' => 'estudio_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('estudio', 'create')
            ->notEmpty('estudio');

        $validator
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['pedido_id'], 'Pedidos'));

        return $rules;
    }
}
