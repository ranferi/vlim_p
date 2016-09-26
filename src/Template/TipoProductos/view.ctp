<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Producto'), ['action' => 'edit', $tipoProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Producto'), ['action' => 'delete', $tipoProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Productos'), ['controller' => 'CategoriaProductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Producto'), ['controller' => 'CategoriaProductos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoProductos view large-9 medium-8 columns content">
    <h3><?= h($tipoProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tipoProducto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($tipoProducto->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tipoProducto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tipoProducto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categoria Productos') ?></h4>
        <?php if (!empty($tipoProducto->categoria_productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Tipo Producto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipoProducto->categoria_productos as $categoriaProductos): ?>
            <tr>
                <td><?= h($categoriaProductos->id) ?></td>
                <td><?= h($categoriaProductos->nombre) ?></td>
                <td><?= h($categoriaProductos->descripcion) ?></td>
                <td><?= h($categoriaProductos->tipo_producto_id) ?></td>
                <td><?= h($categoriaProductos->created) ?></td>
                <td><?= h($categoriaProductos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CategoriaProductos', 'action' => 'view', $categoriaProductos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CategoriaProductos', 'action' => 'edit', $categoriaProductos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategoriaProductos', 'action' => 'delete', $categoriaProductos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriaProductos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($tipoProducto->pedidos)): ?>
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
            <?php foreach ($tipoProducto->pedidos as $pedidos): ?>
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
