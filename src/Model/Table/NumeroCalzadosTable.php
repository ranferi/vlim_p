<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NumeroCalzados Model
 *
 * @property \Cake\ORM\Association\HasMany $Pacientes
 * @property \Cake\ORM\Association\HasMany $Pedidos
 *
 * @method \App\Model\Entity\NumeroCalzado get($primaryKey, $options = [])
 * @method \App\Model\Entity\NumeroCalzado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NumeroCalzado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NumeroCalzado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NumeroCalzado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NumeroCalzado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NumeroCalzado findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NumeroCalzadosTable extends Table
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

        $this->table('numero_calzados');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pacientes', [
            'foreignKey' => 'numero_calzado_id'
        ]);
        $this->hasMany('Pedidos', [
            'foreignKey' => 'numero_calzado_id'
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
            ->decimal('mexicano')
            ->allowEmpty('mexicano');

        $validator
            ->decimal('italiano_millitrex')
            ->allowEmpty('italiano_millitrex');

        $validator
            ->decimal('italiano_freestep')
            ->allowEmpty('italiano_freestep');

        return $validator;
    }
}
