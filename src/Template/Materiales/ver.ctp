<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/blog.png', ['alt' => 'Ver Aviso']) ?>
                <?= __('Ver Material # ') . h($materiale->id) . '(' . h($materiale->nombre) . ')' ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar este Material']) . ' ' . __('Editar'),
                        ['action' => 'editar', $materiale->id],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(
                        $this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar este Material']) . ' ' . __('Eliminar'),
                        ['action' => 'eliminar', $materiale->id],
                        ['confirm' => __('¿Estás seguro de querer eliminar # {0}?', $materiale->id), 'escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/add.png', ['alt' => 'Crear Material']) . ' ' . __('Crear'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Materiales']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>

        <div class="da-panel-content">
            <table class="da-table da-detail-view">
                <tbody>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($materiale->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Nombre') ?></th>
                    <td><?= h($materiale->nombre) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Creado') ?></th>
                    <td><?= h($materiale->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modificado') ?></th>
                    <td><?= h($materiale->modified) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
