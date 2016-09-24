<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/blog.png', ['alt' => 'Ver Talla de Calzado']) ?>
                <?= __('Ver Talla de Calzado # ') . h($numeroCalzado->id) ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar esta Talla de Calzado']) . ' ' . __('Editar'),
                        ['action' => 'editar', $numeroCalzado->id],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(
                        $this->Html->image('icons/color/cross.png', ['alt' => 'Eliminar esta Talla de Calzado']) . ' ' . __('Eliminar'),
                        ['action' => 'eliminar', $numeroCalzado->id],
                        ['confirm' => __('¿Estás seguro de querer eliminar # {0}?', $numeroCalzado->id), 'escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/add.png', ['alt' => 'Crear Pedido']) . ' ' . __('Nuevo Pedido'),
                        ['controller' => 'Pedidos', 'action' => 'crear'],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Tallas de Calzado']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>

        <div class="da-panel-content">
            <table class="da-table da-detail-view">
                <tbody>
                <tr class="odd">
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($numeroCalzado->id) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Mexicano') ?></th>
                    <td><?= $this->Number->format($numeroCalzado->mexicano) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Italiano Millitrex') ?></th>
                    <td><?= $this->Number->format($numeroCalzado->italiano_millitrex) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Italiano Freestep') ?></th>
                    <td><?= $this->Number->format($numeroCalzado->italiano_freestep) ?></td>
                </tr>
                <tr class="odd">
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($numeroCalzado->created) ?></td>
                </tr>
                <tr class="even">
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($numeroCalzado->modified) ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>