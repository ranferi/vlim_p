<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estudio'), ['action' => 'edit', $estudio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estudio'), ['action' => 'delete', $estudio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estudio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estudios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estudio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estudios view large-9 medium-8 columns content">
    <h3><?= h($estudio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estudio') ?></th>
            <td><?= h($estudio->estudio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($estudio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $estudio->has('paciente') ? $this->Html->link($estudio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $estudio->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estudio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido Id') ?></th>
            <td><?= $this->Number->format($estudio->pedido_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estudio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estudio->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($estudio->pedidos)): ?>
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
            <?php foreach ($estudio->pedidos as $pedidos): ?>
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
