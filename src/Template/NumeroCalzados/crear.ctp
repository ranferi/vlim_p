<?php $this->Html->addCrumb('Tallas', '/numero-calzados'); ?>
<?php $this->Html->addCrumb('Crear', ['controller' => 'NumeroCalzados', 'action' => 'crear']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-add"></i> <?= __('Crear Talla de Calzado') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">
                    Campos con <span class="required">*</span> son requeridos.
                </div>
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
                            <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>