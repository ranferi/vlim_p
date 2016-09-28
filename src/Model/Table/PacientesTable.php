<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pacientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Referidos
 * @property \Cake\ORM\Association\BelongsTo $Softwares
 * @property \Cake\ORM\Association\BelongsTo $NumeroCalzados
 * @property \Cake\ORM\Association\BelongsTo $Sucursals
 * @property \Cake\ORM\Association\HasMany $Disenios
 * @property \Cake\ORM\Association\HasMany $Estudios
 * @property \Cake\ORM\Association\HasMany $Pedidos
 *
 * @method \App\Model\Entity\Paciente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paciente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paciente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paciente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paciente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PacientesTable extends Table
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

        $this->table('pacientes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Referidos', [
            'foreignKey' => 'referido_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Softwares', [
            'foreignKey' => 'software_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('NumeroCalzados', [
            'foreignKey' => 'numero_calzado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sucursals', [
            'foreignKey' => 'sucursal_id'
        ]);
        $this->hasMany('Disenios', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('Estudios', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('Pedidos', [
            'foreignKey' => 'paciente_id'
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
            ->requirePresence('nombre_completo', 'create')
            ->notEmpty('nombre_completo');

        $validator
            ->integer('sexo')
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->date('fecha_nacimiento')
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmpty('fecha_nacimiento');

        $validator
            ->allowEmpty('calle_numero');

        $validator
            ->allowEmpty('colonia');

        $validator
            ->allowEmpty('delegacion_municipio');

        $validator
            ->allowEmpty('ciudad_estado');

        $validator
            ->allowEmpty('pais');

        $validator
            ->allowEmpty('codigo_postal');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->decimal('estatura')
            ->requirePresence('estatura', 'create')
            ->notEmpty('estatura');

        $validator
            ->decimal('peso')
            ->requirePresence('peso', 'create')
            ->notEmpty('peso');

        $validator
            ->boolean('dolor_espalda')
            ->requirePresence('dolor_espalda', 'create')
            ->notEmpty('dolor_espalda');

        $validator
            ->boolean('dolor_rodilla')
            ->requirePresence('dolor_rodilla', 'create')
            ->notEmpty('dolor_rodilla');

        $validator
            ->boolean('dolor_tobillo')
            ->requirePresence('dolor_tobillo', 'create')
            ->notEmpty('dolor_tobillo');

        $validator
            ->boolean('dolor_cadera')
            ->requirePresence('dolor_cadera', 'create')
            ->notEmpty('dolor_cadera');

        $validator
            ->boolean('dolor_pies')
            ->requirePresence('dolor_pies', 'create')
            ->notEmpty('dolor_pies');

        $validator
            ->boolean('recibir_notificacion')
            ->requirePresence('recibir_notificacion', 'create')
            ->notEmpty('recibir_notificacion');

        $validator
            ->requirePresence('id_freestep', 'create')
            ->notEmpty('id_freestep');

        $validator
            ->allowEmpty('patología');

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
        $rules->add($rules->existsIn(['referido_id'], 'Referidos'));
        $rules->add($rules->existsIn(['software_id'], 'Softwares'));
        $rules->add($rules->existsIn(['numero_calzado_id'], 'NumeroCalzados'));
        $rules->add($rules->existsIn(['sucursal_id'], 'Sucursals'));

        return $rules;
    }
}
