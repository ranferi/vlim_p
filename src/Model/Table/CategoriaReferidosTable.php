<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriaReferidos Model
 *
 * @property \Cake\ORM\Association\HasMany $Referidos
 *
 * @method \App\Model\Entity\CategoriaReferido get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriaReferido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriaReferido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriaReferido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriaReferido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriaReferido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriaReferido findOrCreate($search, callable $callback = null)
 */
class CategoriaReferidosTable extends Table
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

        $this->table('categoria_referidos');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->hasMany('Referidos', [
            'foreignKey' => 'categoria_referido_id'
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
            ->notEmpty('nombre')
            ->add('nombre', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['nombre']));

        return $rules;
    }
}
