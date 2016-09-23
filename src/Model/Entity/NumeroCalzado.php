<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NumeroCalzado Entity
 *
 * @property int $id
 * @property float $mexicano
 * @property float $italiano_millitrex
 * @property float $italiano_freestep
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente[] $pacientes
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class NumeroCalzado extends Entity
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
