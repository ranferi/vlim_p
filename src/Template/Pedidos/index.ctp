<?php $this->Html->addCrumb('Pedidos', '/pedidos'); ?>
<?php $this->Html->addCrumb('Administrar', ['controller' => 'Pedidos', 'action' => 'administrar']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Pedidos') ?></span>
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
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('es_urgente') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('confirmado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipo_etapa_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('estudio_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('vendedor_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipo_producto_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('numero_calzado_id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($pedidos as $pedido): ?>
                        <tr>
                            <td><?= $this->Number->format($pedido->id) ?></td>
                            <td><?= h($pedido->es_urgente) ?></td>
                            <td><?= h($pedido->confirmado) ?></td>
                            <td><?= $this->Number->format($pedido->total) ?></td>
                            <td><?= $pedido->has('paciente') ? $this->Html->link($pedido->paciente->id, ['controller' => 'Pacientes', 'action' => 'ver', $pedido->paciente->id]) : '' ?></td>
                            <td><?= $pedido->has('sucursal') ? $this->Html->link($pedido->sucursal->id, ['controller' => 'Sucursals', 'action' => 'ver', $pedido->sucursal->id]) : '' ?></td>
                            <td><?= $pedido->has('tipo_etapa') ? $this->Html->link($pedido->tipo_etapa->id, ['controller' => 'TipoEtapas', 'action' => 'ver', $pedido->tipo_etapa->id]) : '' ?></td>
                            <td><?= h($pedido->estudio_id) ?></td>
                            <td><?= $pedido->has('vendedor') ? $this->Html->link($pedido->vendedor->id, ['controller' => 'Vendedors', 'action' => 'ver', $pedido->vendedor->id]) : '' ?></td>
                            <td><?= $pedido->has('tipo_producto') ? $this->Html->link($pedido->tipo_producto->nombre, ['controller' => 'TipoProductos', 'action' => 'ver', $pedido->tipo_producto->id]) : '' ?></td>
                            <td><?= $pedido->has('numero_calzado') ? $this->Html->link($pedido->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'ver', $pedido->numero_calzado->id]) : '' ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $pedido->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Producto', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $pedido->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Producto', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $pedido->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Producto', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $pedido->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>