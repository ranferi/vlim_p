<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['controller' => 'TipoProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['controller' => 'TipoProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos index large-9 medium-8 columns content">
    <h3><?= __('Pedidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('es_urgente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('confirmado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etapa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estudio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendedor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_calzado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diseniador_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estudio_id_diseniador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= h($pedido->es_urgente) ?></td>
                <td><?= h($pedido->confirmado) ?></td>
                <td><?= $this->Number->format($pedido->total) ?></td>
                <td><?= $pedido->has('paciente') ? $this->Html->link($pedido->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pedido->paciente->id]) : '' ?></td>
                <td><?= $pedido->has('sucursal') ? $this->Html->link($pedido->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $pedido->sucursal->id]) : '' ?></td>
                <td><?= $this->Number->format($pedido->etapa_id) ?></td>
                <td><?= h($pedido->estudio_id) ?></td>
                <td><?= h($pedido->vendedor_id) ?></td>
                <td><?= $pedido->has('tipo_producto') ? $this->Html->link($pedido->tipo_producto->id, ['controller' => 'TipoProductos', 'action' => 'view', $pedido->tipo_producto->id]) : '' ?></td>
                <td><?= $pedido->has('numero_calzado') ? $this->Html->link($pedido->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $pedido->numero_calzado->id]) : '' ?></td>
                <td><?= $this->Number->format($pedido->diseniador_id) ?></td>
                <td><?= h($pedido->estudio_id_diseniador) ?></td>
                <td><?= h($pedido->created) ?></td>
                <td><?= h($pedido->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
