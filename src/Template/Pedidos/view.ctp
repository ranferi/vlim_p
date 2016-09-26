<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Etapas'), ['controller' => 'TipoEtapas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Etapa'), ['controller' => 'TipoEtapas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendedors'), ['controller' => 'Vendedors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendedor'), ['controller' => 'Vendedors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['controller' => 'TipoProductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['controller' => 'TipoProductos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseniadors'), ['controller' => 'Diseniadors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diseniador'), ['controller' => 'Diseniadors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidos view large-9 medium-8 columns content">
    <h3><?= h($pedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Es Urgente') ?></th>
            <td><?= h($pedido->es_urgente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Confirmado') ?></th>
            <td><?= h($pedido->confirmado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $pedido->has('paciente') ? $this->Html->link($pedido->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pedido->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sucursal') ?></th>
            <td><?= $pedido->has('sucursal') ? $this->Html->link($pedido->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $pedido->sucursal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Etapa') ?></th>
            <td><?= $pedido->has('tipo_etapa') ? $this->Html->link($pedido->tipo_etapa->id, ['controller' => 'TipoEtapas', 'action' => 'view', $pedido->tipo_etapa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estudio Id') ?></th>
            <td><?= h($pedido->estudio_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendedor') ?></th>
            <td><?= $pedido->has('vendedor') ? $this->Html->link($pedido->vendedor->id, ['controller' => 'Vendedors', 'action' => 'view', $pedido->vendedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Producto') ?></th>
            <td><?= $pedido->has('tipo_producto') ? $this->Html->link($pedido->tipo_producto->nombre, ['controller' => 'TipoProductos', 'action' => 'view', $pedido->tipo_producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Calzado') ?></th>
            <td><?= $pedido->has('numero_calzado') ? $this->Html->link($pedido->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $pedido->numero_calzado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diseniador') ?></th>
            <td><?= $pedido->has('diseniador') ? $this->Html->link($pedido->diseniador->id, ['controller' => 'Diseniadors', 'action' => 'view', $pedido->diseniador->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($pedido->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estudio Id Diseniador') ?></th>
            <td><?= h($pedido->estudio_id_diseniador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pedido->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pedido->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($pedido->observaciones)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estudios') ?></h4>
        <?php if (!empty($pedido->estudios)): ?>
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
            <?php foreach ($pedido->estudios as $estudios): ?>
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
        <h4><?= __('Related Disenios') ?></h4>
        <?php if (!empty($pedido->disenios)): ?>
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
            <?php foreach ($pedido->disenios as $disenios): ?>
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
</div>
