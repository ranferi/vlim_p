<?php $this->Html->addCrumb('Sucursales', '/sucursals'); ?>
<?php $this->Html->addCrumb('Ver', ['controller' => 'Sucursals', 'action' => 'ver']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Sucursal # ') . h($sucursal->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i> ' . __('Editar'),
                            ['action' => 'editar', $sucursal->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $sucursal->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $sucursal->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Nuevo Pedido'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i> ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Nombre Sucursal') ?></th>
                        <td><?= h($sucursal->nombre_sucursal) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($sucursal->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Calle No') ?></th>
                        <td><?= h($sucursal->calle_no) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Colonia') ?></th>
                        <td><?= h($sucursal->colonia) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Delegacion Municipio') ?></th>
                        <td><?= h($sucursal->delegacion_municipio) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Ciudad Estado') ?></th>
                        <td><?= h($sucursal->ciudad_estado) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Pais') ?></th>
                        <td><?= h($sucursal->pais) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Cp') ?></th>
                        <td><?= h($sucursal->cp) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Plataforma') ?></th>
                        <td><?= h($sucursal->plataforma) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Software') ?></th>
                        <td><?= $sucursal->has('software') ? $this->Html->link($sucursal->software->id, ['controller' => 'Softwares', 'action' => 'view', $sucursal->software->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Escaner') ?></th>
                        <td><?= h($sucursal->escaner) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Telefono') ?></th>
                        <td><?= h($sucursal->telefono) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Empresa') ?></th>
                        <td><?= $sucursal->has('empresa') ? $this->Html->link($sucursal->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $sucursal->empresa->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($sucursal->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($sucursal->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($sucursal->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>