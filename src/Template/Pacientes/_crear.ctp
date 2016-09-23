<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?></li>
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
        echo $this->Form->input('genero');
        echo $this->Form->input('fecha_nacimiento', ['empty' => true]);
        echo $this->Form->input('calle_no');
        echo $this->Form->input('colonia');
        echo $this->Form->input('delegacion_municipio');
        echo $this->Form->input('ciudad_estado');
        echo $this->Form->input('pais');
        echo $this->Form->input('cp');
        echo $this->Form->input('telefono');
        echo $this->Form->input('correo');
        echo $this->Form->input('donde_nos_encontro');
        echo $this->Form->input('ref_doctor');
        echo $this->Form->input('estatura');
        echo $this->Form->input('peso');
        echo $this->Form->input('numero_calzado_id', ['options' => $numeroCalzados, 'empty' => true]);
        echo $this->Form->input('dolor_espalda');
        echo $this->Form->input('dolor_rodilla');
        echo $this->Form->input('dolor_tobillo');
        echo $this->Form->input('dolor_cadera');
        echo $this->Form->input('dolor_pies');
        echo $this->Form->input('notificaciones');
        echo $this->Form->input('patologia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    <div
    <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} en total') ?>
</div>
<div>
    <?= $this->Paginator->first(__('Primero')) ?>
    <?= $this->Paginator->prev(__('Anterior')) ?>
    <span>
                        <?= $this->Paginator->numbers() ?>
                    </span>
    <?= $this->Paginator->next(__('Siguiente')) ?>
    <?= $this->Paginator->last(__('Último')) ?>
</div>
</div>
