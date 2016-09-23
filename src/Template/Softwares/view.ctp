<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Software'), ['action' => 'edit', $software->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Software'), ['action' => 'delete', $software->id], ['confirm' => __('Are you sure you want to delete # {0}?', $software->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Softwares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Software'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="softwares view large-9 medium-8 columns content">
    <h3><?= h($software->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Software') ?></th>
            <td><?= h($software->tipo_software) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($software->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($software->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($software->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sucursals') ?></h4>
        <?php if (!empty($software->sucursals)): ?>
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
            <?php foreach ($software->sucursals as $sucursals): ?>
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
</div>
