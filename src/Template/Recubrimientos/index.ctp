<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recubrimiento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recubrimientos index large-9 medium-8 columns content">
    <h3><?= __('Recubrimientos') ?></h3>
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
            <?php foreach ($recubrimientos as $recubrimiento): ?>
            <tr>
                <td><?= $this->Number->format($recubrimiento->id) ?></td>
                <td><?= h($recubrimiento->nombre) ?></td>
                <td><?= h($recubrimiento->created) ?></td>
                <td><?= h($recubrimiento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recubrimiento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recubrimiento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recubrimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recubrimiento->id)]) ?>
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
