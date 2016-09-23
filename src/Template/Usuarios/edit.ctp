<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Usuarios'), ['controller' => 'TipoUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Usuario'), ['controller' => 'TipoUsuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
            echo $this->Form->input('nombre_completo');
            echo $this->Form->input('nombre_usuario');
            echo $this->Form->input('email');
            echo $this->Form->input('calle_no');
            echo $this->Form->input('colonia');
            echo $this->Form->input('delegacion_municipio');
            echo $this->Form->input('ciudada_estado');
            echo $this->Form->input('pais');
            echo $this->Form->input('cp');
            echo $this->Form->input('telefono');
            echo $this->Form->input('password');
            echo $this->Form->input('tipo_usuario_id', ['options' => $tipoUsuarios, 'empty' => true]);
            echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->input('sucursal_id', ['options' => $sucursals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
