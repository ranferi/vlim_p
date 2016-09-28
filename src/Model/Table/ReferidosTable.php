<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Referidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CategoriaReferidos
 * @property \Cake\ORM\Association\HasMany $Pacientes
 *
 * @method \App\Model\Entity\Referido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Referido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Referido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Referido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Referido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Referido findOrCreate($search, callable $callback = null)
 */
class ReferidosTable extends Table
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

        $this->table('referidos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('CategoriaReferidos', [
            'foreignKey' => 'categoria_referido_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pacientes', [
            'foreignKey' => 'referido_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

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
        $rules->add($rules->existsIn(['categoria_referido_id'], 'CategoriaReferidos'));

        return $rules;
    }
}
