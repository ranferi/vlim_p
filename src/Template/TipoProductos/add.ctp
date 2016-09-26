<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Productos'), ['controller' => 'CategoriaProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['controller' => 'CategoriaProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoProductos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoProducto) ?>
    <fieldset>
        <legend><?= __('Add Tipo Producto') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
