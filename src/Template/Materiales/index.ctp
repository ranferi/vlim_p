<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiales index large-9 medium-8 columns content">
    <h3><?= __('Materiales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materiales as $materiale): ?>
            <tr>
                <td><?= $this->Number->format($materiale->id) ?></td>
                <td><?= h($materiale->nombre) ?></td>
                <td><?= h($materiale->created) ?></td>
                <td><?= h($materiale->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materiale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materiale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materiale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]) ?>
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
