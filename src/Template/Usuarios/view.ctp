<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Usuarios'), ['controller' => 'TipoUsuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Usuario'), ['controller' => 'TipoUsuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Completo') ?></th>
            <td><?= h($usuario->nombre_completo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Usuario') ?></th>
            <td><?= h($usuario->nombre_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calle No') ?></th>
            <td><?= h($usuario->calle_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($usuario->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delegacion Municipio') ?></th>
            <td><?= h($usuario->delegacion_municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudada Estado') ?></th>
            <td><?= h($usuario->ciudada_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($usuario->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cp') ?></th>
            <td><?= h($usuario->cp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($usuario->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Usuario') ?></th>
            <td><?= $usuario->has('tipo_usuario') ? $this->Html->link($usuario->tipo_usuario->id, ['controller' => 'TipoUsuarios', 'action' => 'view', $usuario->tipo_usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $usuario->has('empresa') ? $this->Html->link($usuario->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $usuario->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sucursal') ?></th>
            <td><?= $usuario->has('sucursal') ? $this->Html->link($usuario->sucursal->id, ['controller' => 'Sucursals', 'action' => 'view', $usuario->sucursal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
</div>
