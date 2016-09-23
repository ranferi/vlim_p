<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($empresa->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sucursals') ?></h4>
        <?php if (!empty($empresa->sucursals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre Sucursal') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Calle No') ?></th>
                <th scope="col"><?= __('Colonia') ?></th>
                <th scope="col"><?= __('Delegacion Municipio') ?></th>
                <th scope="col"><?= __('Ciudad Estado') ?></th>
                <th scope="col"><?= __('Pais') ?></th>
                <th scope="col"><?= __('Cp') ?></th>
                <th scope="col"><?= __('Plataforma') ?></th>
                <th scope="col"><?= __('Software Id') ?></th>
                <th scope="col"><?= __('Escaner') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Ped A Dist Lue Conf') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->sucursals as $sucursals): ?>
            <tr>
                <td><?= h($sucursals->id) ?></td>
                <td><?= h($sucursals->nombre_sucursal) ?></td>
                <td><?= h($sucursals->email) ?></td>
                <td><?= h($sucursals->calle_no) ?></td>
                <td><?= h($sucursals->colonia) ?></td>
                <td><?= h($sucursals->delegacion_municipio) ?></td>
                <td><?= h($sucursals->ciudad_estado) ?></td>
                <td><?= h($sucursals->pais) ?></td>
                <td><?= h($sucursals->cp) ?></td>
                <td><?= h($sucursals->plataforma) ?></td>
                <td><?= h($sucursals->software_id) ?></td>
                <td><?= h($sucursals->escaner) ?></td>
                <td><?= h($sucursals->telefono) ?></td>
                <td><?= h($sucursals->empresa_id) ?></td>
                <td><?= h($sucursals->ped_a_dist_lue_conf) ?></td>
                <td><?= h($sucursals->created) ?></td>
                <td><?= h($sucursals->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sucursals', 'action' => 'view', $sucursals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sucursals', 'action' => 'edit', $sucursals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sucursals', 'action' => 'delete', $sucursals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($empresa->usuarios)): ?>
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
            <?php foreach ($empresa->usuarios as $usuarios): ?>
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
