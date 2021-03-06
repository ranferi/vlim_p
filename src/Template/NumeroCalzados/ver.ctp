<?php $this->Html->addCrumb('Tallas', '/numero-calzados'); ?>
<?php $this->Html->addCrumb('Ver', ['controller' => 'NumeroCalzados', 'action' => 'ver']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-blog"></i> <?= __('Ver Talla de Calzado # ') .  h($numeroCalzado->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-pencil"></i>' . ' ' . __('Editar'),
                            ['action' => 'editar', $numeroCalzado->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $numeroCalzado->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $numeroCalzado->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-table-container">
                <table class="da-table da-detail-view">
                    <tbody>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($numeroCalzado->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Mexicano') ?></th>
                        <td><?= $this->Number->format($numeroCalzado->mexicano) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Italiano Millitrex') ?></th>
                        <td><?= $this->Number->format($numeroCalzado->italiano_millitrex) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Italiano Freestep') ?></th>
                        <td><?= $this->Number->format($numeroCalzado->italiano_freestep) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Creado') ?></th>
                        <td><?= h($numeroCalzado->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modificado') ?></th>
                        <td><?= h($numeroCalzado->modified) ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>