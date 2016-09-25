<div class="grid_4">
    <div class="da-panel collapsible scrollable">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/black/16/list.png', ['alt' => 'Lista de Pacientes']) ; ?>
                <?= __('Pacientes') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/add.png', ['alt' => 'Crear Paciente']) . ' ' . __('Crear'),
                        ['action' => 'crear'], ['escape' => false]) ?>
                </li>
            </ul>
        </div>
        <div class="da-panel-content">
            <table id="da-ex-datatable-numberpaging" class="da-table">
                <thead>
                <tr role="row">
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre_completo', 'Nombre Completo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('genero', 'Género') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento', 'Fecha de Nacimiento') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('delegacion_municipio', 'Delegación y Municipio') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('ciudad_estado', 'Ciudad y Estado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('telefono', 'Teléfono') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?= $this->Number->format($paciente->id) ?></td>
                        <td><?= h($paciente->nombre_completo) ?></td>
                        <td><?= h($paciente->genero) ?></td>
                        <td><?= h($paciente->fecha_nacimiento) ?></td>
                        <td><?= h($paciente->delegacion_municipio) ?></td>
                        <td><?= h($paciente->ciudad_estado) ?></td>
                        <td><?= h($paciente->telefono) ?></td>
                        <td><?= h($paciente->modified) ?></td>
                        <td class="actions da-icon-column">
                            <?= $this->Html->link($this->Html->image('icons/color/magnifier.png', ['alt' => 'Ver']),
                                ['action' => 'ver', $paciente->id],
                                ['class' => 'da-tooltip-n', 'original-title' => 'Ver Paciente', 'escape' => false]) ?>
                            <?= $this->Html->link($this->Html->image('icons/color/pencil.png', ['alt' =>'Editar']),
                                ['action' => 'editar', $paciente->id],
                                ['class' => 'da-tooltip-n', 'original-title' => 'Editar Paciente', 'escape' => false]) ?>
                            <?= $this->Form->postLink($this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar']),
                                ['action' => 'eliminar', $paciente->id],
                                [ 'class' => 'da-tooltip-n', 'original-title' => 'Eliminar Paciente', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $paciente->id), 'escape' => false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
