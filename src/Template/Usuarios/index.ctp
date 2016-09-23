<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Usuarios'), ['controller' => 'TipoUsuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Usuario'), ['controller' => 'TipoUsuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudada_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->nombre_completo) ?></td>
                <td><?= h($usuario->nombre_usuario) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->calle_no) ?></td>
                <td><?= h($usuario->colonia) ?></td>
                <td><?= h($usuario->delegacion_municipio) ?></td>
                <td><?= h($usuario->ciudada_estado) ?></td>
                <td><?= h($usuario->pais) ?></td>
                <td><?= h($usuario->cp) ?></td>
                <td><?= h($usuario->telefono) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= $usuario->has('tipo_usuario') ? $this->Html->link($usuario->tipo_usuario->id, ['controller' => 'TipoUsuarios', 'action' => 'view', $usuario->tipo_usuario->id]) : '' ?></td>
                <td><?= $usuario->has('empresa') ? $this->Html->link($usuario->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $usuario->empresa->id]) : '' ?></td>
                <td><?= $usuario->has('sucursal') ? $this->Html->link($usuario->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $usuario->sucursal->id]) : '' ?></td>
                <td><?= h($usuario->created) ?></td>
                <td><?= h($usuario->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
