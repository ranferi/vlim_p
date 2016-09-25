<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-application-view-tile"></i> <?= __('Avisos') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content with-padding">
                <p class="summary">
                    <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} en total') ?>
                </p>
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
</div>