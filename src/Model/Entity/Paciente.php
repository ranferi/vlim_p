<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $nombre_completo
 * @property string $genero
 * @property \Cake\I18n\Time $fecha_nacimiento
 * @property string $calle_no
 * @property string $colonia
 * @property string $delegacion_municipio
 * @property string $ciudad_estado
 * @property string $pais
 * @property string $cp
 * @property string $telefono
 * @property string $correo
 * @property string $donde_nos_encontro
 * @property string $ref_doctor
 * @property float $estatura
 * @property float $peso
 * @property float $numero_calzado_id
 * @property bool $dolor_espalda
 * @property bool $dolor_rodilla
 * @property bool $dolor_tobillo
 * @property bool $dolor_cadera
 * @property bool $dolor_pies
 * @property bool $notificaciones
 * @property string $patologia
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\NumeroCalzado $numero_calzado
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
