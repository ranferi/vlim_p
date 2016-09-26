<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Categoría de Productos # ') . h($categoriaProducto->id)?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i> ' . __('Editar'),
                            ['action' => 'editar', $categoriaProducto->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $categoriaProducto->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $categoriaProducto->id), 'escape' => false]) ?>
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
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($categoriaProducto->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre') ?></th>
                        <td><?= h($categoriaProducto->nombre) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Descripción') ?></th>
                        <td><?= h($categoriaProducto->descripcion) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Tipo de Producto') ?></th>
                        <td><?= $categoriaProducto->has('tipo_producto') ? $this->Html->link($categoriaProducto->tipo_producto->nombre, ['controller' => 'TipoProductos', 'action' => 'ver', $categoriaProducto->tipo_producto->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($categoriaProducto->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($categoriaProducto->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>