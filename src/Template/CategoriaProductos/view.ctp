<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria Producto'), ['action' => 'edit', $categoriaProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria Producto'), ['action' => 'delete', $categoriaProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['controller' => 'TipoProductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['controller' => 'TipoProductos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriaProductos view large-9 medium-8 columns content">
    <h3><?= h($categoriaProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($categoriaProducto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($categoriaProducto->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= $categoriaProducto->has('tipo_producto') ? $this->Html->link($categoriaProducto->tipo_producto->id, ['controller' => 'TipoProductos', 'action' => 'view', $categoriaProducto->tipo_producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriaProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoriaProducto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoriaProducto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Productos') ?></h4>
        <?php if (!empty($categoriaProducto->productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Categoria Producto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoriaProducto->productos as $productos): ?>
            <tr>
                <td><?= h($productos->id) ?></td>
                <td><?= h($productos->nombre) ?></td>
                <td><?= h($productos->descripcion) ?></td>
                <td><?= h($productos->precio) ?></td>
                <td><?= h($productos->categoria_producto_id) ?></td>
                <td><?= h($productos->created) ?></td>
                <td><?= h($productos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
