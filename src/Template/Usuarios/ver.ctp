<div class="row-fluid">
    <div class="span6">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Usuario # ') . h($usuario->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i> ' . __('Editar'),
                            ['action' => 'editar', $usuario->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $usuario->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $usuario->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Nuevo Pedido'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i> ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= h($usuario->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre Completo') ?></th>
                        <td><?= h($usuario->nombre_completo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Fecha Nacimiento') ?></th>
                        <td><?= h($usuario->fecha_nacimiento) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Telefono') ?></th>
                        <td><?= h($usuario->telefono) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Correo') ?></th>
                        <td><?= h($usuario->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($usuario->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($usuario->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="span6">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Dirección') ?></span>
                <span class="da-panel-toggler"></span>
            </div>

            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
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
                        <th scope="row"><?= __('Ciudad Estado') ?></th>
                        <td><?= h($usuario->ciudad_estado) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Pais') ?></th>
                        <td><?= h($usuario->pais) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Cp') ?></th>
                        <td><?= h($usuario->cp) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>