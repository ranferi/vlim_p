<?php $this->Html->addCrumb('Sucursales', '/sucursals'); ?>
<?php $this->Html->addCrumb('Administrar', ['controller' => 'Sucursals', 'action' => 'index']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Sucursales') ?></span>
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
            <div class="da-panel-content da-table-container">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre_sucursal') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('calle_no') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('ciudad_estado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('cp') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('plataforma') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('software_id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($sucursals as $sucursal): ?>
                        <tr>
                            <td><?= $this->Number->format($sucursal->id) ?></td>
                            <td><?= h($sucursal->nombre_sucursal) ?></td>
                            <td><?= h($sucursal->email) ?></td>
                            <td><?= h($sucursal->calle_no) ?></td>
                            <td><?= h($sucursal->colonia) ?></td>
                            <td><?= h($sucursal->delegacion_municipio) ?></td>
                            <td><?= h($sucursal->ciudad_estado) ?></td>
                            <td><?= h($sucursal->pais) ?></td>
                            <td><?= h($sucursal->cp) ?></td>
                            <td><?= h($sucursal->plataforma) ?></td>
                            <td><?= $sucursal->has('software') ? $this->Html->link($sucursal->software->tipo_software, ['controller' => 'Softwares', 'action' => 'view', $sucursal->software->id]) : '' ?></td>

                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $sucursal->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Sucursal', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $sucursal->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Sucursal', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $sucursal->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Sucursal', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $sucursal->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>