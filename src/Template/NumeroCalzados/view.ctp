<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Numero Calzado'), ['action' => 'edit', $numeroCalzado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Numero Calzado'), ['action' => 'delete', $numeroCalzado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $numeroCalzado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="numeroCalzados view large-9 medium-8 columns content">
    <h3><?= h($numeroCalzado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($numeroCalzado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mexicano') ?></th>
            <td><?= $this->Number->format($numeroCalzado->mexicano) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Italiano Millitrex') ?></th>
            <td><?= $this->Number->format($numeroCalzado->italiano_millitrex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Italiano Freestep') ?></th>
            <td><?= $this->Number->format($numeroCalzado->italiano_freestep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($numeroCalzado->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($numeroCalzado->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pacientes') ?></h4>
        <?php if (!empty($numeroCalzado->pacientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre Completo') ?></th>
                <th scope="col"><?= __('Genero') ?></th>
                <th scope="col"><?= __('Fecha Nacimiento') ?></th>
                <th scope="col"><?= __('Calle No') ?></th>
                <th scope="col"><?= __('Colonia') ?></th>
                <th scope="col"><?= __('Delegacion Municipio') ?></th>
                <th scope="col"><?= __('Ciudad Estado') ?></th>
                <th scope="col"><?= __('Pais') ?></th>
                <th scope="col"><?= __('Cp') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Donde Nos Encontro') ?></th>
                <th scope="col"><?= __('Ref Doctor') ?></th>
                <th scope="col"><?= __('Estatura') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Numero Calzado Id') ?></th>
                <th scope="col"><?= __('Dolor Espalda') ?></th>
                <th scope="col"><?= __('Dolor Rodilla') ?></th>
                <th scope="col"><?= __('Dolor Tobillo') ?></th>
                <th scope="col"><?= __('Dolor Cadera') ?></th>
                <th scope="col"><?= __('Dolor Pies') ?></th>
                <th scope="col"><?= __('Notificaciones') ?></th>
                <th scope="col"><?= __('Patologia') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($numeroCalzado->pacientes as $pacientes): ?>
            <tr>
                <td><?= h($pacientes->id) ?></td>
                <td><?= h($pacientes->nombre_completo) ?></td>
                <td><?= h($pacientes->genero) ?></td>
                <td><?= h($pacientes->fecha_nacimiento) ?></td>
                <td><?= h($pacientes->calle_no) ?></td>
                <td><?= h($pacientes->colonia) ?></td>
                <td><?= h($pacientes->delegacion_municipio) ?></td>
                <td><?= h($pacientes->ciudad_estado) ?></td>
                <td><?= h($pacientes->pais) ?></td>
                <td><?= h($pacientes->cp) ?></td>
                <td><?= h($pacientes->telefono) ?></td>
                <td><?= h($pacientes->correo) ?></td>
                <td><?= h($pacientes->donde_nos_encontro) ?></td>
                <td><?= h($pacientes->ref_doctor) ?></td>
                <td><?= h($pacientes->estatura) ?></td>
                <td><?= h($pacientes->peso) ?></td>
                <td><?= h($pacientes->numero_calzado_id) ?></td>
                <td><?= h($pacientes->dolor_espalda) ?></td>
                <td><?= h($pacientes->dolor_rodilla) ?></td>
                <td><?= h($pacientes->dolor_tobillo) ?></td>
                <td><?= h($pacientes->dolor_cadera) ?></td>
                <td><?= h($pacientes->dolor_pies) ?></td>
                <td><?= h($pacientes->notificaciones) ?></td>
                <td><?= h($pacientes->patologia) ?></td>
                <td><?= h($pacientes->created) ?></td>
                <td><?= h($pacientes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pacientes', 'action' => 'view', $pacientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pacientes', 'action' => 'edit', $pacientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pacientes', 'action' => 'delete', $pacientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($numeroCalzado->pedidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Es Urgente') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Confirmado') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Sucursal Id') ?></th>
                <th scope="col"><?= __('Etapa Id') ?></th>
                <th scope="col"><?= __('Estudio Id') ?></th>
                <th scope="col"><?= __('Vendedor Id') ?></th>
                <th scope="col"><?= __('Tipo Producto Id') ?></th>
                <th scope="col"><?= __('Numero Calzado Id') ?></th>
                <th scope="col"><?= __('Diseniador Id') ?></th>
                <th scope="col"><?= __('Estudio Id Diseniador') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($numeroCalzado->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->es_urgente) ?></td>
                <td><?= h($pedidos->observaciones) ?></td>
                <td><?= h($pedidos->confirmado) ?></td>
                <td><?= h($pedidos->total) ?></td>
                <td><?= h($pedidos->paciente_id) ?></td>
                <td><?= h($pedidos->sucursal_id) ?></td>
                <td><?= h($pedidos->etapa_id) ?></td>
                <td><?= h($pedidos->estudio_id) ?></td>
                <td><?= h($pedidos->vendedor_id) ?></td>
                <td><?= h($pedidos->tipo_producto_id) ?></td>
                <td><?= h($pedidos->numero_calzado_id) ?></td>
                <td><?= h($pedidos->diseniador_id) ?></td>
                <td><?= h($pedidos->estudio_id_diseniador) ?></td>
                <td><?= h($pedidos->created) ?></td>
                <td><?= h($pedidos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
