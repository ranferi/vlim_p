<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoUsuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Usuario') ?></legend>
        <?php
            echo $this->Form->input('tipo_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
