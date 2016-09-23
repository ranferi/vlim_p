<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Softwares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="softwares form large-9 medium-8 columns content">
    <?= $this->Form->create($software) ?>
    <fieldset>
        <legend><?= __('Add Software') ?></legend>
        <?php
            echo $this->Form->input('tipo_software');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
