<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['controller' => 'TipoProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['controller' => 'TipoProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriaProductos index large-9 medium-8 columns content">
    <h3><?= __('Categoria Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriaProductos as $categoriaProducto): ?>
            <tr>
                <td><?= $this->Number->format($categoriaProducto->id) ?></td>
                <td><?= h($categoriaProducto->nombre) ?></td>
                <td><?= h($categoriaProducto->descripcion) ?></td>
                <td><?= $categoriaProducto->has('tipo_producto') ? $this->Html->link($categoriaProducto->tipo_producto->id, ['controller' => 'TipoProductos', 'action' => 'view', $categoriaProducto->tipo_producto->id]) : '' ?></td>
                <td><?= h($categoriaProducto->created) ?></td>
                <td><?= h($categoriaProducto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriaProducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriaProducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriaProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
