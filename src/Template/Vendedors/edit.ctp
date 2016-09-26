<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendedors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendedors form large-9 medium-8 columns content">
    <?= $this->Form->create($vendedor) ?>
    <fieldset>
        <legend><?= __('Edit Vendedor') ?></legend>
        <?php
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('nombre');
            echo $this->Form->input('sucursal_id', ['options' => $sucursals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
