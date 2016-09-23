<div class="grid_2">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/blog.png', ['alt' => 'Ver Paciente']) ?>
                <?= __('Ver Paciente # ') . h($paciente->id) ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar este Paciente']) . ' ' . __('Editar'),
                        ['action' => 'editar', $paciente->id],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(
                        $this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar este Paciente']) . ' ' . __('Eliminar'),
                        ['action' => 'eliminar', $paciente->id],
                        ['confirm' => __('¿Estás seguro de querer eliminar # {0}?', $paciente->id), 'escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/add.png', ['alt' => 'Crear Pedido']) . ' ' . __('Nuevo Pedido'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Pacientes']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>

        <div class="da-panel-content">
            <table class="da-table da-detail-view">
                <tbody>
                <tr class="odd">
                    <th scope="row"><?= __('No. de Paciente') ?></th>
                    <td><?= h($paciente->id) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Nombre Completo') ?></th>
                    <td><?= h($paciente->nombre_completo) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Género') ?></th>
                    <td><?= h($paciente->genero) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Fecha Nacimiento') ?></th>
                    <td><?= h($paciente->fecha_nacimiento) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Telefono') ?></th>
                    <td><?= h($paciente->telefono) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Correo') ?></th>
                    <td><?= h($paciente->correo) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Donde Nos Encontro') ?></th>
                    <td><?= h($paciente->donde_nos_encontro) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Ref Doctor') ?></th>
                    <td><?= h($paciente->ref_doctor) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Numero Calzado') ?></th>
                    <td><?= $paciente->has('numero_calzado') ? $this->Html->link($paciente->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $paciente->numero_calzado->id]) : '' ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Dolor Espalda') ?></th>
                    <td><?= h($paciente->dolor_espalda) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Dolor Rodilla') ?></th>
                    <td><?= h($paciente->dolor_rodilla) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Dolor Tobillo') ?></th>
                    <td><?= h($paciente->dolor_tobillo) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Dolor Cadera') ?></th>
                    <td><?= h($paciente->dolor_cadera) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Dolor Pies') ?></th>
                    <td><?= h($paciente->dolor_pies) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Notificaciones') ?></th>
                    <td><?= h($paciente->notificaciones) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Patologia') ?></th>
                    <td><?= h($paciente->patologia) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Estatura') ?></th>
                    <td><?= $this->Number->format($paciente->estatura) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Peso') ?></th>
                    <td><?= $this->Number->format($paciente->peso) ?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="grid_2">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/blog.png', ['alt' => 'Ver Paciente']) ?>
                <?= __('Dirección') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>

        <div class="da-panel-content">
            <table class="da-table da-detail-view">
                <tbody>
                <tr class="odd">
                    <th scope="row"><?= __('Calle No') ?></th>
                    <td><?= h($paciente->calle_no) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Colonia') ?></th>
                    <td><?= h($paciente->colonia) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Delegacion Municipio') ?></th>
                    <td><?= h($paciente->delegacion_municipio) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Ciudad Estado') ?></th>
                    <td><?= h($paciente->ciudad_estado) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Pais') ?></th>
                    <td><?= h($paciente->pais) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Cp') ?></th>
                    <td><?= h($paciente->cp) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/application_view_tile.png', ['alt' => 'Ver Paciente']) ?>
                <?= __('Estudios') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>

        <div class="da-panel-content">

            <?php if (!empty($paciente->estudios)): ?>
                <table  class="da-table da-detail-view">
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Estudio') ?></th>
                        <th scope="col"><?= __('Observaciones') ?></th>
                        <th scope="col"><?= __('Creado') ?></th>
                        <th scope="col"><?= __('Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>

                    <?php $count = 0; foreach ($paciente->estudios as $estudios): $tableClass = (++$count%2 ? "odd" : "even");?>
                        <tr class="<?php echo $tableClass; ?>">
                            <td><?= h($estudios->id) ?></td>
                            <td><?= h($estudios->estudio) ?></td>
                            <td><?= h($estudios->observaciones) ?></td>
                            <td><?= h($estudios->created) ?></td>
                            <td><?= h($estudios->modified) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link($this->Html->image('icons/color/magnifier.png', ['alt' => 'Ver']), ['action' => 'ver', $estudios->id], ['class' => 'da-tooltip-n', 'original-title' => 'Ver Estudio', 'escape' => false]) ?>
                                <?= $this->Html->link($this->Html->image('icons/color/pencil.png', ['alt' =>'Editar']), ['action' => 'editar', $estudios->id], ['class' => 'da-tooltip-n', 'original-title' => 'Editar Estudio', 'escape' => false]) ?>
                                <?= $this->Form->postLink($this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar']), ['action' => 'eliminar', $estudios->id], [ 'class' => 'da-tooltip-n', 'original-title' => 'Eliminar Estudio', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $estudios->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>