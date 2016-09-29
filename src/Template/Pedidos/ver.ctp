<?php $this->Html->addCrumb('Pedidos', '/pedidos'); ?>
<?php $this->Html->addCrumb('Ver', ['controller' => 'Pedidos', 'action' => 'ver']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Pedido # ') . h($pedido->id)?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i> ' . __('Editar'),
                            ['action' => 'editar', $pedido->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $pedido->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $pedido->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Crear'),
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
                        <th scope="row"><?= __('¿Es Urgente?') ?></th>
                        <td><?= h($pedido->es_urgente) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Confirmado') ?></th>
                        <td><?= h($pedido->confirmado) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Paciente') ?></th>
                        <td><?= $pedido->has('paciente') ? $this->Html->link($pedido->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pedido->paciente->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sucursal') ?></th>
                        <td><?= $pedido->has('sucursal') ? $this->Html->link($pedido->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $pedido->sucursal->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Estudio') ?></th>
                        <td><?= h($pedido->estudio_id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Vendedor') ?></th>
                        <td><?= h($pedido->vendedor_id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Tipo de Producto') ?></th>
                        <td><?= $pedido->has('tipo_producto') ? $this->Html->link($pedido->tipo_producto->id, ['controller' => 'TipoProductos', 'action' => 'view', $pedido->tipo_producto->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Talla de Calzado') ?></th>
                        <td><?= $pedido->has('numero_calzado') ? $this->Html->link($pedido->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $pedido->numero_calzado->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($pedido->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Total') ?></th>
                        <td><?= $this->Number->format($pedido->total) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Etapa') ?></th>
                        <td><?= $this->Number->format($pedido->etapa_id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Diseñador') ?></th>
                        <td><?= $this->Number->format($pedido->diseniador_id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($pedido->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($pedido->modified) ?></td>
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
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Estudios') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i> ' .  __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <?php if (!empty($pedido->estudios)): ?>
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Estudio') ?></th>
                        <th scope="col"><?= __('Observaciones') ?></th>
                        <th scope="col"><?= __('Paciente Id') ?></th>
                        <th scope="col"><?= __('Pedido Id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($pedido->estudios as $estudios): ?>
                        <tr>
                            <td><?= h($estudios->id) ?></td>
                            <td><?= h($estudios->estudio) ?></td>
                            <td><?= h($estudios->observaciones) ?></td>
                            <td><?= h($estudios->paciente_id) ?></td>
                            <td><?= h($estudios->pedido_id) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $estudios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Pedido', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $estudios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Pedido', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $estudios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Pedido', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $estudios->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Estudios') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i> ' .  __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <?php if (!empty($pedido->disenios)): ?>
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Disenio') ?></th>
                        <th scope="col"><?= __('Usuario Id') ?></th>
                        <th scope="col"><?= __('Paciente Id') ?></th>
                        <th scope="col"><?= __('Pedido Id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($pedido->disenios as $disenios): ?>
                        <tr>
                            <td><?= h($disenios->id) ?></td>
                            <td><?= h($disenios->disenio) ?></td>
                            <td><?= h($disenios->usuario_id) ?></td>
                            <td><?= h($disenios->paciente_id) ?></td>
                            <td><?= h($disenios->pedido_id) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $disenios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Diseño', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $disenios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Diseño', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $disenios->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Diseño', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $disenios->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>