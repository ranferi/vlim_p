<?php $this->Html->addCrumb('Pedidos', '/pedidos'); ?>
<?php $this->Html->addCrumb('Crear', ['controller' => 'Pedidos', 'action' => 'crear']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-pencil"></i> <?= __('Crear Pedido') ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i> ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">
                    Campos con <span class="required">*</span> son requeridos.
                </div>
                <?= $this->Form->create($pedido, ['class' => 'da-form']) ?>
                <div class="da-form-inline">
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="¿Es Urgente? *"><?= __('¿Es Urgente?') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('es_urgente', ['class' => 'span6']); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Observaciones *"><?= __('Observaciones') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->textarea('observaciones', ['class' => 'span6']); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Confirmado *"><?= __('Confirmado') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('confirmado', ['class' => 'span6']); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Total *"><?= __('Total') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <div class="span6">
                                <?php echo $this->Form->text('total', ['class' => 'da-spinner']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Paciente *"><?= __('Paciente') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('paciente_id',  $pacientes); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Sucursal *"><?= __('Sucursal') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('sucursal_id',  $sucursals); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Etapa *"><?= __('Etapa') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('etapa_id', $tipoEtapas); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Estudio *"><?= __('Estudio') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('estudio_id'); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Vendedor *"><?= __('Vendedor') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('vendedor_id', $vendedors); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Tipo de Producto *"><?= __('Tipo de Producto') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('tipo_producto_id', $tipoProductos); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Talla de Calzado *"><?= __('Talla de Calzado') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('numero_calzado_id', $numeroCalzados); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Diseñador *"><?= __('Diseñador') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('diseniador_id', $diseniadors); ?>
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
