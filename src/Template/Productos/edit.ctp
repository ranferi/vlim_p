<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Productos'), ['controller' => 'CategoriaProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['controller' => 'CategoriaProductos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion');
            echo $this->Form->input('precio');
            echo $this->Form->input('categoria_producto_id', ['options' => $categoriaProductos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
