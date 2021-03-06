<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-pencil"></i> <?= __('Editar Categoría de Productos # ') . h($categoriaProducto->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-magnifier"></i> ' . __('Ver'),
                            ['action' => 'ver', $categoriaProducto->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i> ' . __('Eliminar'),
                            ['action' => 'eliminar', $categoriaProducto->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $categoriaProducto->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i> ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i> ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">Campos con <span class="required">*</span> son requeridos.</div>
                <?= $this->Form->create($categoriaProducto, ['class' => 'da-form']) ?>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Nombre *"><?= __('Nombre') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('nombre', ['class' => 'span6']); ?>
                            </div>
                        </div><div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Descripción *"><?= __('Descripción') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('descripcion', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Tipo de Producto *"><?= __('Nombre') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->select('tipo_producto_id',  $tipoProductos); ?>
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