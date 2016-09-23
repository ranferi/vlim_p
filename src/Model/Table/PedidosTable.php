<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\BelongsTo $Sucursals
 * @property \Cake\ORM\Association\BelongsTo $Etapas
 * @property \Cake\ORM\Association\BelongsTo $Estudios
 * @property \Cake\ORM\Association\BelongsTo $Vendedors
 * @property \Cake\ORM\Association\BelongsTo $TipoProductos
 * @property \Cake\ORM\Association\BelongsTo $NumeroCalzados
 * @property \Cake\ORM\Association\BelongsTo $Diseniadors
 * @property \Cake\ORM\Association\HasMany $Disenios
 * @property \Cake\ORM\Association\HasMany $Estudios
 *
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PedidosTable extends Table
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

        $this->table('pedidos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->belongsTo('Sucursals', [
            'foreignKey' => 'sucursal_id'
        ]);
        $this->belongsTo('Etapas', [
            'foreignKey' => 'etapa_id'
        ]);
        $this->belongsTo('Estudios', [
            'foreignKey' => 'estudio_id'
        ]);
        $this->belongsTo('Vendedors', [
            'foreignKey' => 'vendedor_id'
        ]);
        $this->belongsTo('TipoProductos', [
            'foreignKey' => 'tipo_producto_id'
        ]);
        $this->belongsTo('NumeroCalzados', [
            'foreignKey' => 'numero_calzado_id'
        ]);
        $this->belongsTo('Diseniadors', [
            'foreignKey' => 'diseniador_id'
        ]);
        $this->hasMany('Disenios', [
            'foreignKey' => 'pedido_id'
        ]);
        $this->hasMany('Estudios', [
            'foreignKey' => 'pedido_id'
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
            ->allowEmpty('es_urgente');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->allowEmpty('confirmado');

        $validator
            ->decimal('total')
            ->allowEmpty('total');

        $validator
            ->dateTime('estudio_id_diseniador')
            ->allowEmpty('estudio_id_diseniador');

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
        $rules->add($rules->existsIn(['sucursal_id'], 'Sucursals'));
        $rules->add($rules->existsIn(['etapa_id'], 'Etapas'));
        $rules->add($rules->existsIn(['estudio_id'], 'Estudios'));
        $rules->add($rules->existsIn(['vendedor_id'], 'Vendedors'));
        $rules->add($rules->existsIn(['tipo_producto_id'], 'TipoProductos'));
        $rules->add($rules->existsIn(['numero_calzado_id'], 'NumeroCalzados'));
        $rules->add($rules->existsIn(['diseniador_id'], 'Diseniadors'));

        return $rules;
    }
}
