<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoUsuarios Model
 *
 * @property \Cake\ORM\Association\HasMany $Usuarios
 *
 * @method \App\Model\Entity\TipoUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoUsuario findOrCreate($search, callable $callback = null)
 */
class TipoUsuariosTable extends Table
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

        $this->table('tipo_usuarios');
        $this->displayField('tipo_usuario');
        $this->primaryKey('id');

        $this->hasMany('Usuarios', [
            'foreignKey' => 'tipo_usuario_id'
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
            ->allowEmpty('tipo_usuario');

        return $validator;
    }
}
