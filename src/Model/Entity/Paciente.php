<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $nombre_completo
 * @property int $sexo
 * @property \Cake\I18n\Time $fecha_nacimiento
 * @property string $calle_numero
 * @property string $colonia
 * @property string $delegacion_municipio
 * @property string $ciudad_estado
 * @property string $pais
 * @property string $codigo_postal
 * @property string $telefono
 * @property string $email
 * @property int $referido_id
 * @property int $software_id
 * @property float $estatura
 * @property float $peso
 * @property int $numero_calzado_id
 * @property bool $dolor_espalda
 * @property bool $dolor_rodilla
 * @property bool $dolor_tobillo
 * @property bool $dolor_cadera
 * @property bool $dolor_pies
 * @property bool $recibir_notificacion
 * @property int $sucursal_id
 * @property string $id_freestep
 * @property string $patología
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Referido $referido
 * @property \App\Model\Entity\Software $software
 * @property \App\Model\Entity\NumeroCalzado $numero_calzado
 * @property \App\Model\Entity\Sucursal $sucursal
 * @property \App\Model\Entity\Disenio[] $disenios
 * @property \App\Model\Entity\Estudio[] $estudios
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Paciente extends Entity
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
