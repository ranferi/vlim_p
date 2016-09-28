<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-grid"></i> <?= __('Tallas de Calzado') ?></span>
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
                        <th scope="col"><?= $this->Paginator->sort('mexicano') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('italiano_millitrex') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('italiano_freestep') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($numeroCalzados as $numeroCalzado): ?>
                        <tr>
                            <td><?= $this->Number->format($numeroCalzado->id) ?></td>
                            <td><?= $this->Number->format($numeroCalzado->mexicano) ?></td>
                            <td><?= $this->Number->format($numeroCalzado->italiano_millitrex) ?></td>
                            <td><?= $this->Number->format($numeroCalzado->italiano_freestep) ?></td>
                            <td class="actions da-icon-column">
                                <?= $this->Html->link('<i class="icol-magnifier"></i>', ['action' => 'ver', $numeroCalzado->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Ver Talla de Calzado', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="icol-pencil"></i>', ['action' => 'editar', $numeroCalzado->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Editar Talla de Calzado', 'escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="icol-cross"></i>', ['action' => 'eliminar', $numeroCalzado->id],
                                    ['data-placement' => 'bottom', 'rel' => 'tooltip', 'title' => 'Eliminar Talla de Calzado', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $numeroCalzado->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="dataTables_wrapper">
                    <div class="dataTables_info">
                        <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} en total') ?>
                    </div>

                    <div class="dataTables_paginate paging_full_numbers" id="da-ex-datatable-numberpaging_paginate">
                        <?= $this->Paginator->first(__('Primero')) ?>
                        <?= $this->Paginator->prev(__('Anterior')) ?>
                        <span>
                            <?= $this->Paginator->numbers() ?>
                        </span>
                        <?= $this->Paginator->next(__('Siguiente')) ?>
                        <?= $this->Paginator->last(__('Último')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>