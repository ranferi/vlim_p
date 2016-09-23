<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pacientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $NumeroCalzados
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

        $this->belongsTo('NumeroCalzados', [
            'foreignKey' => 'numero_calzado_id'
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
            ->allowEmpty('nombre_completo');

        $validator
            ->allowEmpty('genero');

        $validator
            ->date('fecha_nacimiento')
            ->allowEmpty('fecha_nacimiento');

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
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('correo');

        $validator
            ->allowEmpty('donde_nos_encontro');

        $validator
            ->allowEmpty('ref_doctor');

        $validator
            ->decimal('estatura')
            ->allowEmpty('estatura');

        $validator
            ->decimal('peso')
            ->allowEmpty('peso');

        $validator
            ->boolean('dolor_espalda')
            ->allowEmpty('dolor_espalda');

        $validator
            ->boolean('dolor_rodilla')
            ->allowEmpty('dolor_rodilla');

        $validator
            ->boolean('dolor_tobillo')
            ->allowEmpty('dolor_tobillo');

        $validator
            ->boolean('dolor_cadera')
            ->allowEmpty('dolor_cadera');

        $validator
            ->boolean('dolor_pies')
            ->allowEmpty('dolor_pies');

        $validator
            ->boolean('notificaciones')
            ->allowEmpty('notificaciones');

        $validator
            ->allowEmpty('patologia');

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
        $rules->add($rules->existsIn(['numero_calzado_id'], 'NumeroCalzados'));

        return $rules;
    }
}
