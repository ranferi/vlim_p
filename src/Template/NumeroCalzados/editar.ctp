<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-pencil"></i> <?= __('Editar Talla de Calzado # ') .  h($numeroCalzado->id)  ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-magnifier"></i>' . ' ' . __('Ver'),
                            ['action' => 'ver', $numeroCalzado->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $numeroCalzado->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $numeroCalzado->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">Campos con <span class="required">*</span> son requeridos.</div>
                <?= $this->Form->create($numeroCalzado, ['class' => 'da-form']) ?>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Mexicano *"><?= __('Mexicano') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <div class="span5">
                                    <?php echo $this->Form->text('mexicano', ['class' => 'da-spinner']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Italiano Millitrex *"><?= __('Italiano Millitrex') ?> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <div class="span5">
                                    <?php echo $this->Form->text('italiano_millitrex', ['class' => 'da-spinner']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Italiano FreeStep *"><?= __('Italiano FreeStep') ?> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <div class="span5">
                                    <?php echo $this->Form->text('italiano_freestep', ['class' => 'da-spinner']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="btn-row">
                            <?= $this->Form->button(__('Modificar'), ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>