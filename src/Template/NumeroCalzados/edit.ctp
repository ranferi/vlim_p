<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $numeroCalzado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $numeroCalzado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="numeroCalzados form large-9 medium-8 columns content">
    <?= $this->Form->create($numeroCalzado) ?>
    <fieldset>
        <legend><?= __('Edit Numero Calzado') ?></legend>
        <?php
            echo $this->Form->input('mexicano');
            echo $this->Form->input('italiano_millitrex');
            echo $this->Form->input('italiano_freestep');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
