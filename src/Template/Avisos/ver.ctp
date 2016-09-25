<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Aviso # ') . h($aviso->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i>' . ' ' . __('Editar'),
                            ['action' => 'editar', $aviso->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $aviso->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $aviso->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Titulo') ?></th>
                        <td><?= h($aviso->titulo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row" class="message_row"><?= __('Mensaje') ?></th>
                        <td><?= $aviso->mensaje ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Usuario') ?></th>
                        <td><?= $aviso->has('usuario') ? $this->Html->link($aviso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $aviso->usuario->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Empresa') ?></th>
                        <td><?= $aviso->has('empresa') ? $this->Html->link($aviso->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $aviso->empresa->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($aviso->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($aviso->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modicado') ?></th>
                        <td><?= h($aviso->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
