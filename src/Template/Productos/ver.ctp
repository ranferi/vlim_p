<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Producto # ') . h($producto->id)?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i> ' . __('Editar'),
                            ['action' => 'editar', $producto->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $producto->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $producto->id), 'escape' => false]) ?>
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
                        <td><?= $this->Number->format($producto->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre') ?></th>
                        <td><?= h($producto->nombre) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Descripción') ?></th>
                        <td><?= h($producto->descripcion) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Categoría de Producto') ?></th>
                        <td><?= $producto->has('categoria_producto') ? $this->Html->link($producto->categoria_producto->id, ['controller' => 'CategoriaProductos', 'action' => 'view', $producto->categoria_producto->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Precio') ?></th>
                        <td><?= $this->Number->format($producto->precio) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($producto->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($producto->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>