<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/application_view_tile.png', ['alt' => 'Últimos de Avisos']) ?>
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
                <li>
                    <?= $this->Html->link(
                        $this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Avisos']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>

            </ul>
        </div>
        <div class="da-panel-content with-padding">

            <p class="summary"><?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} en total') ?></p>
            <?php foreach ($avisos as $aviso): ?>
                <div class="da-panel-widget">
                    <h1><?= $aviso->titulo ?></h1>
                    <div class="pull-right"><?= h($aviso->modified) ?></div>
                    <div><?= $aviso->mensaje ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>