<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Categorías de Productos') ?></span>
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
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipo_producto_id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($categoriaProductos as $categoriaProducto): ?>
                        <tr>
                            <td><?= $this->Number->format($categoriaProducto->id) ?></td>
                            <td><?= h($categoriaProducto->nombre) ?></td>
                            <td><?= h($categoriaProducto->descripcion) ?></td>
                            <td><?= $categoriaProducto->has('tipo_producto') ? $this->Html->link($categoriaProducto->tipo_producto->id, ['controller' => 'TipoProductos', 'action' => 'view', $categoriaProducto->tipo_producto->id]) : '' ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $categoriaProducto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Categoría de Productos', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $categoriaProducto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Categoría de Productos', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $categoriaProducto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Categoría de Productos', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $categoriaProducto->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>