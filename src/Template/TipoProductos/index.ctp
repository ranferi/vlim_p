<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Productos'), ['controller' => 'CategoriaProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['controller' => 'CategoriaProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoProductos index large-9 medium-8 columns content">
    <h3><?= __('Tipo Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoProductos as $tipoProducto): ?>
            <tr>
                <td><?= $this->Number->format($tipoProducto->id) ?></td>
                <td><?= h($tipoProducto->nombre) ?></td>
                <td><?= h($tipoProducto->descripcion) ?></td>
                <td><?= h($tipoProducto->created) ?></td>
                <td><?= h($tipoProducto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoProducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoProducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoProducto->id)]) ?>
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
