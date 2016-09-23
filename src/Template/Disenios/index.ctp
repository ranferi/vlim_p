<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disenio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disenios index large-9 medium-8 columns content">
    <h3><?= __('Disenios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disenio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disenios as $disenio): ?>
            <tr>
                <td><?= $this->Number->format($disenio->id) ?></td>
                <td><?= h($disenio->disenio) ?></td>
                <td><?= $disenio->has('usuario') ? $this->Html->link($disenio->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $disenio->usuario->id]) : '' ?></td>
                <td><?= $disenio->has('paciente') ? $this->Html->link($disenio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $disenio->paciente->id]) : '' ?></td>
                <td><?= $disenio->has('pedido') ? $this->Html->link($disenio->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $disenio->pedido->id]) : '' ?></td>
                <td><?= h($disenio->created) ?></td>
                <td><?= h($disenio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disenio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disenio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disenio->id)]) ?>
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
