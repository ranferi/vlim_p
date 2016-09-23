<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disenio'), ['action' => 'edit', $disenio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disenio'), ['action' => 'delete', $disenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disenio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disenios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disenio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disenios view large-9 medium-8 columns content">
    <h3><?= h($disenio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disenio') ?></th>
            <td><?= h($disenio->disenio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $disenio->has('usuario') ? $this->Html->link($disenio->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $disenio->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $disenio->has('paciente') ? $this->Html->link($disenio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $disenio->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido') ?></th>
            <td><?= $disenio->has('pedido') ? $this->Html->link($disenio->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $disenio->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disenio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($disenio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($disenio->modified) ?></td>
        </tr>
    </table>
</div>
