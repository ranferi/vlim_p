<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-add"></i> <?= __('Crear Producto') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i> ' . __('Administrar'),
                            ['action' => 'index'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">
                    Campos con <span class="required">*</span> son requeridos.
                </div>
                <?= $this->Form->create($producto, ['class' => 'da-form']) ?>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Nombre *"><?= __('Nombre') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('nombre', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Descripción *"><?= __('Descripción') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('descripción', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Precio *"><?= __('Precio') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <div class="span6">
                                    <?php echo $this->Form->text('precio', ['class' => 'da-spinner']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Categoría de Producto *"><?= __('Categoría de Producto') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->select('categoria_producto_id',  $categoriaProductos); ?>
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