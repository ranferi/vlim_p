<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disenio Entity
 *
 * @property int $id
 * @property string $disenio
 * @property int $usuario_id
 * @property int $paciente_id
 * @property int $pedido_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Pedido $pedido
 */
class Disenio extends Entity
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
}
