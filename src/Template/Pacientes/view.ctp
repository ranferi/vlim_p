<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Completo') ?></th>
            <td><?= h($paciente->nombre_completo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= h($paciente->genero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calle No') ?></th>
            <td><?= h($paciente->calle_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($paciente->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delegacion Municipio') ?></th>
            <td><?= h($paciente->delegacion_municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad Estado') ?></th>
            <td><?= h($paciente->ciudad_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($paciente->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cp') ?></th>
            <td><?= h($paciente->cp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($paciente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($paciente->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Donde Nos Encontro') ?></th>
            <td><?= h($paciente->donde_nos_encontro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Doctor') ?></th>
            <td><?= h($paciente->ref_doctor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Calzado') ?></th>
            <td><?= $paciente->has('numero_calzado') ? $this->Html->link($paciente->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $paciente->numero_calzado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patologia') ?></th>
            <td><?= h($paciente->patologia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatura') ?></th>
            <td><?= $this->Number->format($paciente->estatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($paciente->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($paciente->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paciente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paciente->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dolor Espalda') ?></th>
            <td><?= $paciente->dolor_espalda ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dolor Rodilla') ?></th>
            <td><?= $paciente->dolor_rodilla ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dolor Tobillo') ?></th>
            <td><?= $paciente->dolor_tobillo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dolor Cadera') ?></th>
            <td><?= $paciente->dolor_cadera ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dolor Pies') ?></th>
            <td><?= $paciente->dolor_pies ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notificaciones') ?></th>
            <td><?= $paciente->notificaciones ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Disenios') ?></h4>
        <?php if (!empty($paciente->disenios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Disenio') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Pedido Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->disenios as $disenios): ?>
            <tr>
                <td><?= h($disenios->id) ?></td>
                <td><?= h($disenios->disenio) ?></td>
                <td><?= h($disenios->usuario_id) ?></td>
                <td><?= h($disenios->paciente_id) ?></td>
                <td><?= h($disenios->pedido_id) ?></td>
                <td><?= h($disenios->created) ?></td>
                <td><?= h($disenios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disenios', 'action' => 'view', $disenios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disenios', 'action' => 'edit', $disenios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disenios', 'action' => 'delete', $disenios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disenios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estudios') ?></h4>
        <?php if (!empty($paciente->estudios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estudio') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Pedido Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->estudios as $estudios): ?>
            <tr>
                <td><?= h($estudios->id) ?></td>
                <td><?= h($estudios->estudio) ?></td>
                <td><?= h($estudios->observaciones) ?></td>
                <td><?= h($estudios->paciente_id) ?></td>
                <td><?= h($estudios->pedido_id) ?></td>
                <td><?= h($estudios->created) ?></td>
                <td><?= h($estudios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Estudios', 'action' => 'view', $estudios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estudios', 'action' => 'edit', $estudios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estudios', 'action' => 'delete', $estudios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estudios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($paciente->pedidos)): ?>
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
            <?php foreach ($paciente->pedidos as $pedidos): ?>
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
