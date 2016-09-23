<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sucursal Entity
 *
 * @property int $id
 * @property string $nombre_sucursal
 * @property string $email
 * @property string $calle_no
 * @property string $colonia
 * @property string $delegacion_municipio
 * @property string $ciudad_estado
 * @property string $pais
 * @property string $cp
 * @property string $plataforma
 * @property int $software_id
 * @property string $escaner
 * @property string $telefono
 * @property int $empresa_id
 * @property string $ped_a_dist_lue_conf
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Software $software
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Sucursal extends Entity
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
