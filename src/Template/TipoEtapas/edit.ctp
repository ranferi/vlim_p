<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoEtapa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoEtapa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Etapas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoEtapas form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoEtapa) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Etapa') ?></legend>
        <?php
            echo $this->Form->input('nombre_etapa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
