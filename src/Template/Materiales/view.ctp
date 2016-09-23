<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiale'), ['action' => 'edit', $materiale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiale'), ['action' => 'delete', $materiale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiales view large-9 medium-8 columns content">
    <h3><?= h($materiale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($materiale->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($materiale->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($materiale->modified) ?></td>
        </tr>
    </table>
</div>
