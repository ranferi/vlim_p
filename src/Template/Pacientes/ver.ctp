<?php $this->Html->addCrumb('Pacientes', '/pacientes'); ?>
<?php $this->Html->addCrumb('Ver', ['controller' => 'Pacientes', 'action' => 'ver']); ?>
<div class="row-fluid">
    <div class="span6">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Paciente # ') . h($paciente->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i>' . ' ' . __('Editar'),
                            ['action' => 'editar', $paciente->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $paciente->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $paciente->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Nuevo Pedido'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('No. de Paciente') ?></th>
                        <td><?= h($paciente->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre Completo') ?></th>
                        <td><?= h($paciente->nombre_completo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sexo') ?></th>
                        <td><?= h($paciente->sexo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Fecha Nacimiento') ?></th>
                        <td><?= h($paciente->fecha_nacimiento) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Teléfono') ?></th>
                        <td><?= h($paciente->telefono) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($paciente->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('¿Cómo nos encontro?') ?></th>
                        <td><?= $paciente->has('referido') ? $this->Html->link($paciente->referido->id, ['controller' => 'Referidos', 'action' => 'view', $paciente->referido->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Talla de Calzado') ?></th>
                        <td><?= $paciente->has('numero_calzado') ? $this->Html->link($paciente->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $paciente->numero_calzado->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Dolor Espalda') ?></th>
                        <td><?= $paciente->dolor_espalda ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Dolor Rodilla') ?></th>
                        <td><?= $paciente->dolor_rodilla ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Dolor Tobillo') ?></th>
                        <td><?= $paciente->dolor_tobillo ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Dolor Cadera') ?></th>
                        <td><?= $paciente->dolor_cadera ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Dolor Pies') ?></th>
                        <td><?= $paciente->dolor_pies ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Recibir Notificación') ?></th>
                        <td><?= $paciente->recibir_notificacion ? __('Si') : __('No'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Patologia') ?></th>
                        <td><?= h($paciente->patologia) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Estatura') ?></th>
                        <td><?= $this->Number->format($paciente->estatura) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Peso') ?></th>
                        <td><?= $this->Number->format($paciente->peso) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($paciente->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($paciente->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="span6">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Dirección') ?></span>
                <span class="da-panel-toggler"></span>
            </div>

            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Calle y Numero') ?></th>
                        <td><?= h($paciente->calle_numero) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Colonia') ?></th>
                        <td><?= h($paciente->colonia) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Delegación y Municipio') ?></th>
                        <td><?= h($paciente->delegacion_municipio) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Ciudad y Estado') ?></th>
                        <td><?= h($paciente->ciudad_estado) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('País') ?></th>
                        <td><?= h($paciente->pais) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Código Postal') ?></th>
                        <td><?= h($paciente->codigo_postal) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Estudios') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-content da-table-container">
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

                        <?php foreach ($paciente->estudios as $estudios):?>
                            <tr>
                                <td><?= h($estudios->id) ?></td>
                                <td><?= h($estudios->estudio) ?></td>
                                <td><?= h($estudios->observaciones) ?></td>
                                <td><?= h($estudios->created) ?></td>
                                <td><?= h($estudios->modified) ?></td>
                                <td class="actions da-icon-column">
                                    <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $estudios->id],
                                        ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Estudio', 'escape' => false]) ?>
                                    <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $estudios->id],
                                        ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Estudio', 'escape' => false]) ?>
                                    <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $estudios->id],
                                        ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Estudio', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $estudios->id), 'escape' => false]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>