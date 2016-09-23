<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Softwares'), ['controller' => 'Softwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Software'), ['controller' => 'Softwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sucursals index large-9 medium-8 columns content">
    <h3><?= __('Sucursals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_sucursal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plataforma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('software_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('escaner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ped_a_dist_lue_conf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sucursals as $sucursal): ?>
            <tr>
                <td><?= $this->Number->format($sucursal->id) ?></td>
                <td><?= h($sucursal->nombre_sucursal) ?></td>
                <td><?= h($sucursal->email) ?></td>
                <td><?= h($sucursal->calle_no) ?></td>
                <td><?= h($sucursal->colonia) ?></td>
                <td><?= h($sucursal->delegacion_municipio) ?></td>
                <td><?= h($sucursal->ciudad_estado) ?></td>
                <td><?= h($sucursal->pais) ?></td>
                <td><?= h($sucursal->cp) ?></td>
                <td><?= h($sucursal->plataforma) ?></td>
                <td><?= $sucursal->has('software') ? $this->Html->link($sucursal->software->id, ['controller' => 'Softwares', 'action' => 'view', $sucursal->software->id]) : '' ?></td>
                <td><?= h($sucursal->escaner) ?></td>
                <td><?= h($sucursal->telefono) ?></td>
                <td><?= $sucursal->has('empresa') ? $this->Html->link($sucursal->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $sucursal->empresa->id]) : '' ?></td>
                <td><?= h($sucursal->ped_a_dist_lue_conf) ?></td>
                <td><?= h($sucursal->created) ?></td>
                <td><?= h($sucursal->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sucursal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sucursal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sucursal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursal->id)]) ?>
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
