<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diseniador'), ['action' => 'edit', $diseniador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diseniador'), ['action' => 'delete', $diseniador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseniador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diseniadors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diseniador'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseniadors view large-9 medium-8 columns content">
    <h3><?= h($diseniador->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $diseniador->has('usuario') ? $this->Html->link($diseniador->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $diseniador->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($diseniador->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calle No') ?></th>
            <td><?= h($diseniador->calle_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($diseniador->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delegacion Municipio') ?></th>
            <td><?= h($diseniador->delegacion_municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad Estado') ?></th>
            <td><?= h($diseniador->ciudad_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($diseniador->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Postal') ?></th>
            <td><?= h($diseniador->codigo_postal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($diseniador->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($diseniador->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($diseniador->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($diseniador->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($diseniador->pedidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Es Urgente') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Confirmado') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Paciente Id') ?></th>
                <th scope="col"><?= __('Sucursal Id') ?></th>
                <th scope="col"><?= __('Tipo Etapa Id') ?></th>
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
            <?php foreach ($diseniador->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->es_urgente) ?></td>
                <td><?= h($pedidos->observaciones) ?></td>
                <td><?= h($pedidos->confirmado) ?></td>
                <td><?= h($pedidos->total) ?></td>
                <td><?= h($pedidos->paciente_id) ?></td>
                <td><?= h($pedidos->sucursal_id) ?></td>
                <td><?= h($pedidos->tipo_etapa_id) ?></td>
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
