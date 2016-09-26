<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diseniador Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property string $nombre
 * @property string $calle_no
 * @property string $colonia
 * @property string $delegacion_municipio
 * @property string $ciudad_estado
 * @property string $pais
 * @property string $codigo_postal
 * @property string $telefono
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Diseniador extends Entity
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
