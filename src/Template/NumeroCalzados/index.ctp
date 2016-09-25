<div class="grid_4">
    <div class="da-panel collapsible scrollable">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/black/16/list.png', ['alt' => 'Lista de Tallas']) ; ?>
                <?= __('Tallas') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/add.png', ['alt' => 'Crear Talla']) . ' ' . __('Crear'),
                        ['action' => 'crear'], ['escape' => false]) ?>
                </li>
            </ul>
        </div>
        <div class="da-panel-content">
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
                            <?= $this->Html->link($this->Html->image('icons/color/magnifier.png', ['alt' => 'Ver']),
                                ['action' => 'ver', $numeroCalzado->id],
                                ['class' => 'da-tooltip-n', 'original-title' => 'Ver Aviso', 'escape' => false]) ?>
                            <?= $this->Html->link($this->Html->image('icons/color/pencil.png', ['alt' =>'Editar']),
                                ['action' => 'editar', $numeroCalzado->id],
                                ['class' => 'da-tooltip-n', 'original-title' => 'Editar Aviso', 'escape' => false]) ?>
                            <?= $this->Form->postLink($this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar']),
                                ['action' => 'eliminar', $numeroCalzado->id],
                                ['class' => 'da-tooltip-n', 'original-title' => 'Eliminar Aviso',
                                    'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $numeroCalzado->id), 'escape' => false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>