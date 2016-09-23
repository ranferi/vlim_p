<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sucursal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sucursal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Softwares'), ['controller' => 'Softwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Software'), ['controller' => 'Softwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sucursals form large-9 medium-8 columns content">
    <?= $this->Form->create($sucursal) ?>
    <fieldset>
        <legend><?= __('Edit Sucursal') ?></legend>
        <?php
            echo $this->Form->input('nombre_sucursal');
            echo $this->Form->input('email');
            echo $this->Form->input('calle_no');
            echo $this->Form->input('colonia');
            echo $this->Form->input('delegacion_municipio');
            echo $this->Form->input('ciudad_estado');
            echo $this->Form->input('pais');
            echo $this->Form->input('cp');
            echo $this->Form->input('plataforma');
            echo $this->Form->input('software_id', ['options' => $softwares, 'empty' => true]);
            echo $this->Form->input('escaner');
            echo $this->Form->input('telefono');
            echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->input('ped_a_dist_lue_conf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
