<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sucursals Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Softwares
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 * @property \Cake\ORM\Association\HasMany $Usuarios
 *
 * @method \App\Model\Entity\Sucursal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sucursal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sucursal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sucursal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sucursal findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SucursalsTable extends Table
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

        $this->table('sucursals');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Softwares', [
            'foreignKey' => 'software_id'
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Usuarios', [
            'foreignKey' => 'sucursal_id'
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
            ->allowEmpty('nombre_sucursal');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('calle_no');

        $validator
            ->allowEmpty('colonia');

        $validator
            ->allowEmpty('delegacion_municipio');

        $validator
            ->allowEmpty('ciudad_estado');

        $validator
            ->allowEmpty('pais');

        $validator
            ->allowEmpty('cp');

        $validator
            ->allowEmpty('plataforma');

        $validator
            ->allowEmpty('escaner');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('ped_a_dist_lue_conf');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['software_id'], 'Softwares'));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
