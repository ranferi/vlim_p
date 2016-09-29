<?php $this->Html->addCrumb('Pacientes', '/pacientes'); ?>
<?php $this->Html->addCrumb('Administrar', ['controller' => 'Pacientes', 'action' => 'administrar']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Pacientes') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container dataTable">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre_completo', 'Nombre Completo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento', 'Fecha de Nacimiento') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('delegacion_municipio', 'Delegación y Municipio') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('ciudad_estado', 'Ciudad y Estado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('telefono', 'Teléfono') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($pacientes as $paciente): ?>
                        <tr>
                            <td><?= $this->Number->format($paciente->id) ?></td>
                            <td><?= h($paciente->nombre_completo) ?></td>
                            <td><?= $paciente->sexo ? h('Masculino') : h('Femenino') ?></td>
                            <td><?= h($paciente->fecha_nacimiento) ?></td>
                            <td><?= h($paciente->delegacion_municipio) ?></td>
                            <td><?= h($paciente->ciudad_estado) ?></td>
                            <td><?= h($paciente->telefono) ?></td>
                            <td><?= h($paciente->modified) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $paciente->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Paciente', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $paciente->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Paciente', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $paciente->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Paciente', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $paciente->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="dataTables_wrapper">
                    <div class="dataTables_info">
                        <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} en total') ?>
                    </div>

                    <div class="dataTables_paginate paging_full_numbers" id="da-ex-datatable-numberpaging_paginate">
                        <?= $this->Paginator->first(__('Primero')) ?>
                        <?= $this->Paginator->prev(__('Anterior')) ?>
                        <span>
                            <?= $this->Paginator->numbers() ?>
                        </span>
                        <?= $this->Paginator->next(__('Siguiente')) ?>
                        <?= $this->Paginator->last(__('Último')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
