<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Productos') ?></span>
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
                        <th scope="col"><?= $this->Paginator->sort('descripcion', 'Descripción') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('categoria_producto_id', 'Categoría de Producto') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= $this->Number->format($producto->id) ?></td>
                            <td><?= h($producto->nombre) ?></td>
                            <td><?= h($producto->descripcion) ?></td>
                            <td><?= $this->Number->format($producto->precio) ?></td>
                            <td><?= $producto->has('categoria_producto') ? $this->Html->link($producto->categoria_producto->nombre, ['controller' => 'CategoriaProductos', 'action' => 'ver', $producto->categoria_producto->id]) : '' ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $producto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Producto', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $producto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Producto', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $producto->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Producto', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $producto->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>