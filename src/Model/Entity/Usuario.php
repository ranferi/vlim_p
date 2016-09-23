<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nombre_completo
 * @property string $nombre_usuario
 * @property string $email
 * @property string $calle_no
 * @property string $colonia
 * @property string $delegacion_municipio
 * @property string $ciudada_estado
 * @property string $pais
 * @property string $cp
 * @property string $telefono
 * @property string $password
 * @property int $tipo_usuario_id
 * @property int $empresa_id
 * @property int $sucursal_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TipoUsuario $tipo_usuario
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Sucursal $sucursal
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
