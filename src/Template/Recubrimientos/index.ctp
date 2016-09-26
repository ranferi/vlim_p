<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Recubrimientos') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                    <tr role="row">
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($recubrimientos as $recubrimiento): ?>
                        <tr>
                            <td><?= $this->Number->format($recubrimiento->id) ?></td>
                            <td><?= h($recubrimiento->nombre) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $recubrimiento->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Recubrimiento', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $recubrimiento->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Recubrimiento', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $recubrimiento->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Recubrimiento', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $recubrimiento->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>