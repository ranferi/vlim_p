<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Softwares Model
 *
 * @property \Cake\ORM\Association\HasMany $Sucursals
 *
 * @method \App\Model\Entity\Software get($primaryKey, $options = [])
 * @method \App\Model\Entity\Software newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Software[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Software|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Software patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Software[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Software findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SoftwaresTable extends Table
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

        $this->table('softwares');
        $this->displayField('tipo_software');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sucursals', [
            'foreignKey' => 'software_id'
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
            ->allowEmpty('tipo_software');

        return $validator;
    }
}
