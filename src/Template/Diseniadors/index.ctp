<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diseniador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseniadors index large-9 medium-8 columns content">
    <h3><?= __('Diseniadors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_postal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diseniadors as $diseniador): ?>
            <tr>
                <td><?= $this->Number->format($diseniador->id) ?></td>
                <td><?= $diseniador->has('usuario') ? $this->Html->link($diseniador->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $diseniador->usuario->id]) : '' ?></td>
                <td><?= h($diseniador->nombre) ?></td>
                <td><?= h($diseniador->calle_no) ?></td>
                <td><?= h($diseniador->colonia) ?></td>
                <td><?= h($diseniador->delegacion_municipio) ?></td>
                <td><?= h($diseniador->ciudad_estado) ?></td>
                <td><?= h($diseniador->pais) ?></td>
                <td><?= h($diseniador->codigo_postal) ?></td>
                <td><?= h($diseniador->telefono) ?></td>
                <td><?= h($diseniador->created) ?></td>
                <td><?= h($diseniador->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diseniador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diseniador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diseniador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseniador->id)]) ?>
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
