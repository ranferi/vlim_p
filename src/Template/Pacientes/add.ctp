<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Referidos'), ['controller' => 'Referidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referido'), ['controller' => 'Referidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Softwares'), ['controller' => 'Softwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Software'), ['controller' => 'Softwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Add Paciente') ?></legend>
        <?php
            echo $this->Form->input('nombre_completo');
            echo $this->Form->input('sexo');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('calle_numero');
            echo $this->Form->input('colonia');
            echo $this->Form->input('delegacion_municipio');
            echo $this->Form->input('ciudad_estado');
            echo $this->Form->input('pais');
            echo $this->Form->input('codigo_postal');
            echo $this->Form->input('telefono');
            echo $this->Form->input('email');
            echo $this->Form->input('referido_id', ['options' => $referidos]);
            echo $this->Form->input('software_id', ['options' => $softwares]);
            echo $this->Form->input('estatura');
            echo $this->Form->input('peso');
            echo $this->Form->input('numero_calzado_id', ['options' => $numeroCalzados]);
            echo $this->Form->input('dolor_espalda');
            echo $this->Form->input('dolor_rodilla');
            echo $this->Form->input('dolor_tobillo');
            echo $this->Form->input('dolor_cadera');
            echo $this->Form->input('dolor_pies');
            echo $this->Form->input('recibir_notificacion');
            echo $this->Form->input('sucursal_id', ['options' => $sucursals, 'empty' => true]);
            echo $this->Form->input('id_freestep');
            echo $this->Form->input('patología');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
