<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/blog.png', ['alt' => 'Ver Aviso']) ?>
                <?= __('Ver Aviso # ') . h($aviso->id) ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar este Aviso']) . ' ' . __('Editar'),
                        ['action' => 'editar', $aviso->id],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(
                        $this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar este Aviso']) . ' ' . __('Eliminar'),
                        ['action' => 'eliminar', $aviso->id],
                        ['confirm' => __('¿Estás seguro de querer eliminar # {0}?', $aviso->id), 'escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/add.png', ['alt' => 'Crear Aviso']) . ' ' . __('Crear'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Avisos']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>

        <div class="da-panel-content">
            <table class="da-table da-detail-view">
                <tbody>
                <tr class="odd">
                    <th scope="row"><?= __('Titulo') ?></th>
                    <td><?= h($aviso->titulo) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Mensaje') ?></th>
                    <td><?= $aviso->mensaje ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Usuario') ?></th>
                    <td><?= $aviso->has('usuario') ? $this->Html->link($aviso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $aviso->usuario->id]) : '' ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Empresa') ?></th>
                    <td><?= $aviso->has('empresa') ? $this->Html->link($aviso->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $aviso->empresa->id]) : '' ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aviso->id) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($aviso->created) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($aviso->modified) ?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
