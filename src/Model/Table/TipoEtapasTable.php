<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoEtapas Model
 *
 * @property \Cake\ORM\Association\HasMany $Pedidos
 *
 * @method \App\Model\Entity\TipoEtapa get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoEtapa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoEtapa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoEtapa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoEtapa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoEtapa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoEtapa findOrCreate($search, callable $callback = null)
 */
class TipoEtapasTable extends Table
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

        $this->table('tipo_etapas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Pedidos', [
            'foreignKey' => 'tipo_etapa_id'
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
            ->allowEmpty('nombre_etapa');

        return $validator;
    }
}
