<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-add"></i> <?= __('Crear Usuario') ?></span>
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
                <?= $this->Form->create($usuario, ['class' => 'da-form']) ?>
                <div class="da-form">
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Nombre Completo *"><?= __('Nombre Completo') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('nombre_completo', ['class' => 'span6']); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Usuario *"><?= __('Usuario') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('nombre_usuario', ['class' => 'span6']); ?>
                        </div>
                    </div>

                    <div class="da-form-row">
                        <div class="da-form-cols">
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Calle"><?= __('Calle') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('calle_no'); ?>
                                </div>
                            </div>
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Colonia"><?= __('Colonia') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('colonia'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <div class="da-form-cols">
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Delegación y Municipio"><?= __('Delegación y Municipio') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('delegacion_municipio'); ?>
                                </div>
                            </div>
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Ciudad y Estado"><?= __('Ciudad y Estado') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('ciudad_estado'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <div class="da-form-cols">
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="País"><?= __('País') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('pais'); ?>
                                </div>
                            </div>
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Código Postal"><?= __('Código Postal') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('cp', ['maxlength' => 5]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <div class="da-form-cols">
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Teléfono *"><?= __('Teléfono') ?></span> <span class="required">*</span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('telefono'); ?>
                                </div>
                            </div>
                            <div class="col-4-8">
                                <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Correo Electrónico"><?= __('Correo') ?></span></label>
                                <div class="da-form-item">
                                    <?php echo $this->Form->text('email'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Tipo de Usuario *"><?= __('Tipo de Usuario') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('tipo_usuario_id', $tipoUsuarios); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Empresa *"><?= __('Empresa') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('empresa_id', $empresas); ?>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Sucursal *"><?= __('Sucursal') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('sucursal_id', $sucursals); ?>
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