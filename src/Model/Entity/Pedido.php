<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property string $es_urgente
 * @property string $observaciones
 * @property string $confirmado
 * @property float $total
 * @property int $paciente_id
 * @property int $sucursal_id
 * @property int $tipo_etapa_id
 * @property string $estudio_id
 * @property string $vendedor_id
 * @property int $tipo_producto_id
 * @property int $numero_calzado_id
 * @property int $diseniador_id
 * @property \Cake\I18n\Time $estudio_id_diseniador
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Sucursal $sucursal
 * @property \App\Model\Entity\TipoEtapa $tipo_etapa
 * @property \App\Model\Entity\Estudio[] $estudios
 * @property \App\Model\Entity\Vendedor $vendedor
 * @property \App\Model\Entity\TipoProducto $tipo_producto
 * @property \App\Model\Entity\NumeroCalzado $numero_calzado
 * @property \App\Model\Entity\Diseniador $diseniador
 * @property \App\Model\Entity\Disenio[] $disenios
 */
class Pedido extends Entity
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
