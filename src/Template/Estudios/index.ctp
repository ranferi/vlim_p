<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estudio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estudios index large-9 medium-8 columns content">
    <h3><?= __('Estudios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estudio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudios as $estudio): ?>
            <tr>
                <td><?= $this->Number->format($estudio->id) ?></td>
                <td><?= h($estudio->estudio) ?></td>
                <td><?= h($estudio->observaciones) ?></td>
                <td><?= $estudio->has('paciente') ? $this->Html->link($estudio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $estudio->paciente->id]) : '' ?></td>
                <td><?= $this->Number->format($estudio->pedido_id) ?></td>
                <td><?= h($estudio->created) ?></td>
                <td><?= h($estudio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estudio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estudio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estudio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estudio->id)]) ?>
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
