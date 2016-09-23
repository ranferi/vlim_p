<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sucursal'), ['action' => 'edit', $sucursal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sucursal'), ['action' => 'delete', $sucursal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sucursals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Softwares'), ['controller' => 'Softwares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Software'), ['controller' => 'Softwares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sucursals view large-9 medium-8 columns content">
    <h3><?= h($sucursal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Sucursal') ?></th>
            <td><?= h($sucursal->nombre_sucursal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($sucursal->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calle No') ?></th>
            <td><?= h($sucursal->calle_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($sucursal->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delegacion Municipio') ?></th>
            <td><?= h($sucursal->delegacion_municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad Estado') ?></th>
            <td><?= h($sucursal->ciudad_estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($sucursal->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cp') ?></th>
            <td><?= h($sucursal->cp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plataforma') ?></th>
            <td><?= h($sucursal->plataforma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Software') ?></th>
            <td><?= $sucursal->has('software') ? $this->Html->link($sucursal->software->id, ['controller' => 'Softwares', 'action' => 'view', $sucursal->software->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escaner') ?></th>
            <td><?= h($sucursal->escaner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($sucursal->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $sucursal->has('empresa') ? $this->Html->link($sucursal->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $sucursal->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ped A Dist Lue Conf') ?></th>
            <td><?= h($sucursal->ped_a_dist_lue_conf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sucursal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sucursal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sucursal->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($sucursal->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre Completo') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Calle No') ?></th>
                <th scope="col"><?= __('Colonia') ?></th>
                <th scope="col"><?= __('Delegacion Municipio') ?></th>
                <th scope="col"><?= __('Ciudada Estado') ?></th>
                <th scope="col"><?= __('Pais') ?></th>
                <th scope="col"><?= __('Cp') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Tipo Usuario Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Sucursal Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sucursal->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nombre_completo) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->calle_no) ?></td>
                <td><?= h($usuarios->colonia) ?></td>
                <td><?= h($usuarios->delegacion_municipio) ?></td>
                <td><?= h($usuarios->ciudada_estado) ?></td>
                <td><?= h($usuarios->pais) ?></td>
                <td><?= h($usuarios->cp) ?></td>
                <td><?= h($usuarios->telefono) ?></td>
                <td><?= h($usuarios->password) ?></td>
                <td><?= h($usuarios->tipo_usuario_id) ?></td>
                <td><?= h($usuarios->empresa_id) ?></td>
                <td><?= h($usuarios->sucursal_id) ?></td>
                <td><?= h($usuarios->created) ?></td>
                <td><?= h($usuarios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
