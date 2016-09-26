<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedors index large-9 medium-8 columns content">
    <h3><?= __('Vendedors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedors as $vendedor): ?>
            <tr>
                <td><?= $this->Number->format($vendedor->id) ?></td>
                <td><?= $vendedor->has('usuario') ? $this->Html->link($vendedor->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $vendedor->usuario->id]) : '' ?></td>
                <td><?= h($vendedor->nombre) ?></td>
                <td><?= $vendedor->has('sucursal') ? $this->Html->link($vendedor->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $vendedor->sucursal->id]) : '' ?></td>
                <td><?= h($vendedor->created) ?></td>
                <td><?= h($vendedor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]) ?>
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
