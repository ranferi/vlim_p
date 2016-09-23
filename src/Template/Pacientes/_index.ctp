<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('nombre_completo') ?></th>
            <th scope="col"><?= $this->Paginator->sort('genero') ?></th>
            <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
            <th scope="col"><?= $this->Paginator->sort('calle_no') ?></th>
            <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
            <th scope="col"><?= $this->Paginator->sort('delegacion_municipio') ?></th>
            <th scope="col"><?= $this->Paginator->sort('ciudad_estado') ?></th>
            <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cp') ?></th>
            <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
            <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
            <th scope="col"><?= $this->Paginator->sort('donde_nos_encontro') ?></th>
            <th scope="col"><?= $this->Paginator->sort('ref_doctor') ?></th>
            <th scope="col"><?= $this->Paginator->sort('estatura') ?></th>
            <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
            <th scope="col"><?= $this->Paginator->sort('numero_calzado_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dolor_espalda') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dolor_rodilla') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dolor_tobillo') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dolor_cadera') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dolor_pies') ?></th>
            <th scope="col"><?= $this->Paginator->sort('notificaciones') ?></th>
            <th scope="col"><?= $this->Paginator->sort('patologia') ?></th>
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
                <td><?= h($paciente->genero) ?></td>
                <td><?= h($paciente->fecha_nacimiento) ?></td>
                <td><?= h($paciente->calle_no) ?></td>
                <td><?= h($paciente->colonia) ?></td>
                <td><?= h($paciente->delegacion_municipio) ?></td>
                <td><?= h($paciente->ciudad_estado) ?></td>
                <td><?= h($paciente->pais) ?></td>
                <td><?= h($paciente->cp) ?></td>
                <td><?= h($paciente->telefono) ?></td>
                <td><?= h($paciente->correo) ?></td>
                <td><?= h($paciente->donde_nos_encontro) ?></td>
                <td><?= h($paciente->ref_doctor) ?></td>
                <td><?= $this->Number->format($paciente->estatura) ?></td>
                <td><?= $this->Number->format($paciente->peso) ?></td>
                <td><?= $paciente->has('numero_calzado') ? $this->Html->link($paciente->numero_calzado->id, ['controller' => 'NumeroCalzados', 'action' => 'view', $paciente->numero_calzado->id]) : '' ?></td>
                <td><?= h($paciente->dolor_espalda) ?></td>
                <td><?= h($paciente->dolor_rodilla) ?></td>
                <td><?= h($paciente->dolor_tobillo) ?></td>
                <td><?= h($paciente->dolor_cadera) ?></td>
                <td><?= h($paciente->dolor_pies) ?></td>
                <td><?= h($paciente->notificaciones) ?></td>
                <td><?= h($paciente->patologia) ?></td>
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