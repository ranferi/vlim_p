<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/black/16/list.png', ['alt' => 'Lista de Avisos']) ; ?>
                <?= __('Avisos') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/add.png', ['alt' => 'Crear Aviso']) . ' ' . __('Crear'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>
        <div class="da-panel-content">
            <table id="da-ex-datatable-numberpaging" class="da-table" cellpadding="0" cellspacing="0">
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
                <?php $count = 0; foreach ($avisos as $aviso): $tableClass = (++$count%2 ? "odd" : "even");?>
                    <tr class="<?php echo $tableClass; ?>">
                        <td><?= $this->Number->format($aviso->id) ?></td>
                        <td><?= h($aviso->titulo) ?></td>
                        <td><?= $aviso->has('usuario') ? $this->Html->link($aviso->usuario->id, ['controller' => 'Usuarios', 'action' => 'ver', $aviso->usuario->id]) : '' ?></td>
                        <td><?= $aviso->has('empresa') ? $this->Html->link($aviso->empresa->nombre, ['controller' => 'Empresas', 'action' => 'ver', $aviso->empresa->id]) : '' ?></td>
                        <td><?= h($aviso->created) ?></td>
                        <td><?= h($aviso->modified) ?></td>
                        <td class="actions da-icon-column">
                            <?= $this->Html->link($this->Html->image('icons/color/magnifier.png', ['alt' => 'Ver']), ['action' => 'ver', $aviso->id], ['class' => 'da-tooltip-n', 'original-title' => 'Ver Aviso', 'escape' => false]) ?>
                            <?= $this->Html->link($this->Html->image('icons/color/pencil.png', ['alt' =>'Editar']), ['action' => 'editar', $aviso->id], ['class' => 'da-tooltip-n', 'original-title' => 'Editar Aviso', 'escape' => false]) ?>
                            <?= $this->Form->postLink($this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar']), ['action' => 'eliminar', $aviso->id], [ 'class' => 'da-tooltip-n', 'original-title' => 'Eliminar Aviso', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $aviso->id), 'escape' => false]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

