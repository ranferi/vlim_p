<div class="grid_4">
    <div class="da-panel collapsible scrollable">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/black/16/list.png', ['alt' => 'Lista de Materiales']) ; ?>
                <?= __('Materiales') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/add.png', ['alt' => 'Crear Material']) . ' ' . __('Crear'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>
        <div class="da-panel-content">
            <table id="da-ex-datatable-numberpaging" class="da-table">
                <thead>
                <tr role="row">
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
                </thead>

                <tbody>
                <?php $count = 0; foreach ($materiales as $materiale): $tableClass = (++$count%2 ? "odd" : "even");?>
                    <tr class="<?php echo $tableClass; ?>">
                        <td><?= $this->Number->format($materiale->id) ?></td>
                        <td><?= h($materiale->nombre) ?></td>
                        <td><?= h($materiale->created) ?></td>
                        <td><?= h($materiale->modified) ?></td>
                        <td class="actions da-icon-column">
                            <?= $this->Html->link($this->Html->image('icons/color/magnifier.png', ['alt' => 'Ver']), ['action' => 'ver', $materiale->id], ['class' => 'da-tooltip-n', 'title' => 'Ver Material', 'escape' => false]) ?>
                            <?= $this->Html->link($this->Html->image('icons/color/pencil.png', ['alt' =>'Editar']), ['action' => 'editar', $materiale->id], ['class' => 'da-tooltip-n', 'title' => 'Editar Material', 'escape' => false]) ?>
                            <?= $this->Form->postLink($this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar']), ['action' => 'eliminar', $materiale->id], [ 'class' => 'da-tooltip-n', 'title' => 'Eliminar Material', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $materiale->id), 'escape' => false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>