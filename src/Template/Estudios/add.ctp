<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estudios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estudios form large-9 medium-8 columns content">
    <?= $this->Form->create($estudio) ?>
    <fieldset>
        <legend><?= __('Add Estudio') ?></legend>
        <?php
            echo $this->Form->input('estudio');
            echo $this->Form->input('observaciones');
            echo $this->Form->input('paciente_id', ['options' => $pacientes]);
            echo $this->Form->input('pedido_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
