<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referidos'), ['controller' => 'Referidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referido'), ['controller' => 'Referidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Softwares'), ['controller' => 'Softwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Software'), ['controller' => 'Softwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Numero Calzados'), ['controller' => 'NumeroCalzados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Numero Calzado'), ['controller' => 'NumeroCalzados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sucursals'), ['controller' => 'Sucursals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sucursal'), ['controller' => 'Sucursals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disenios'), ['controller' => 'Disenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disenio'), ['controller' => 'Disenios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estudios'), ['controller' => 'Estudios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estudio'), ['controller' => 'Estudios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_completo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle_numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad_estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigo_postal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('software_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_calzado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dolor_espalda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dolor_rodilla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dolor_tobillo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dolor_cadera') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dolor_pies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recibir_notificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sucursal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_freestep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->nombre_completo) ?></td>
                <td><?= $this->Number->format($paciente->sexo) ?></td>
                <td><?= h($paciente->fecha_nacimiento) ?></td>
                <td><?= h($paciente->calle_numero) ?></td>
                <td><?= h($paciente->colonia) ?></td>
                <td><?= h($paciente->delegacion_municipio) ?></td>
                <td><?= h($paciente->ciudad_estado) ?></td>
                <td><?= h($paciente->pais) ?></td>
                <td><?= h($paciente->codigo_postal) ?></td>
                <td><?= h($paciente->telefono) ?></td>
                <td><?= h($paciente->email) ?></td>
                <td><?= $paciente->has('referido') ? $this->Html->link($paciente->referido->id, ['controller' => 'Referidos', 'action' => 'view', $paciente->referido->id]) : '' ?></td>
                <td><?= $paciente->has('software') ? $this->Html->link($paciente->software->tipo_software, ['controller' => 'Softwares', 'action' => 'view', $paciente->software->id]) : '' ?></td>
                <td><?= $this->Number->format($paciente->estatura) ?></td>
                <td><?= $this->Number->format($paciente->peso) ?></td>
                <td><?= $paciente->has('numero_calzado') ? $this->Html->link($paciente->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $paciente->numero_calzado->id]) : '' ?></td>
                <td><?= h($paciente->dolor_espalda) ?></td>
                <td><?= h($paciente->dolor_rodilla) ?></td>
                <td><?= h($paciente->dolor_tobillo) ?></td>
                <td><?= h($paciente->dolor_cadera) ?></td>
                <td><?= h($paciente->dolor_pies) ?></td>
                <td><?= h($paciente->recibir_notificacion) ?></td>
                <td><?= $paciente->has('sucursal') ? $this->Html->link($paciente->sucursal->nombre_sucursal, ['controller' => 'Sucursals', 'action' => 'view', $paciente->sucursal->id]) : '' ?></td>
                <td><?= h($paciente->id_freestep) ?></td>
                <td><?= h($paciente->created) ?></td>
                <td><?= h($paciente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
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
