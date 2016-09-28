<?php $this->Html->addCrumb('Avisos', '/avisos'); ?>
<?php $this->Html->addCrumb('Administrar', ['controller' => 'Avisos', 'action' => 'administrar']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Avisos') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('titulo', 'Título') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('usuario_id', 'Usuario') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($avisos as $aviso): ?>
                        <tr>
                            <td><?= $this->Number->format($aviso->id) ?></td>
                            <td><?= h($aviso->titulo) ?></td>
                            <td><?= $aviso->has('usuario') ? $this->Html->link($aviso->usuario->id, ['controller' => 'Usuarios', 'action' => 'ver', $aviso->usuario->id]) : '' ?></td>
                            <td><?= $aviso->has('empresa') ? $this->Html->link($aviso->empresa->nombre, ['controller' => 'Empresas', 'action' => 'ver', $aviso->empresa->id]) : '' ?></td>
                            <td><?= h($aviso->created) ?></td>
                            <td><?= h($aviso->modified) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $aviso->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Aviso', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $aviso->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Aviso', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $aviso->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Aviso', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $aviso->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

