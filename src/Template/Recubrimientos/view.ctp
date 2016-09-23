<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recubrimiento'), ['action' => 'edit', $recubrimiento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recubrimiento'), ['action' => 'delete', $recubrimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recubrimiento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recubrimientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recubrimiento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recubrimientos view large-9 medium-8 columns content">
    <h3><?= h($recubrimiento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($recubrimiento->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recubrimiento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($recubrimiento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($recubrimiento->modified) ?></td>
        </tr>
    </table>
</div>
