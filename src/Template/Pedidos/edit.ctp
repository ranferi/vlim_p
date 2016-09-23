<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['controller' => 'TipoProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['controller' => 'TipoProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Edit Pedido') ?></legend>
        <?php
            echo $this->Form->input('es_urgente');
            echo $this->Form->input('observaciones');
            echo $this->Form->input('confirmado');
            echo $this->Form->input('total');
            echo $this->Form->input('paciente_id', ['options' => $pacientes, 'empty' => true]);
            echo $this->Form->input('sucursal_id', ['options' => $sucursals, 'empty' => true]);
            echo $this->Form->input('etapa_id');
            echo $this->Form->input('estudio_id');
            echo $this->Form->input('vendedor_id');
            echo $this->Form->input('tipo_producto_id', ['options' => $tipoProductos, 'empty' => true]);
            echo $this->Form->input('numero_calzado_id', ['options' => $numeroCalzados, 'empty' => true]);
            echo $this->Form->input('diseniador_id');
            echo $this->Form->input('estudio_id_diseniador', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
