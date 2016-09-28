<?php $this->Html->addCrumb('Pacientes', '/pacientes'); ?>
<?php $this->Html->addCrumb('Crear', ['controller' => 'Pacientes', 'action' => 'crear']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-add"></i> <?= __('Crear Paciente')?></span>
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
                <?= $this->Form->create($paciente, ['class' => 'da-form']) ?>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Nombre Completo *"><?= __('Nombre Completo') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('nombre_completo', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label">
                                        <span rel="tooltip" data-placement="top" title="Sexo *"><?= __('Sexo') ?></span>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="da-form-item">
                                        <ul class="da-form-list">
                                            <?php echo $this->Form->radio('sexo', [
                                                ['value' => 0, 'text' => 'Masculino'],
                                                ['value' => 1, 'text' => 'Femenino']]); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label da-form-label-overflow">
                                        <span rel="tooltip" data-placement="top" title="Fecha de Nacimiento *"><?= __('Fecha de Nacimiento') ?></span>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('fecha_nacimiento', ['id' => 'da-ex-datetimepicker']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Calle"><?= __('Calle') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('calle_numero'); ?>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Colonia"><?= __('Colonia') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('colonia'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Delegación y Municipio"><?= __('Delegación y Municipio') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('delegacion_municipio'); ?>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Ciudad y Estado"><?= __('Ciudad y Estado') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('ciudad_estado'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="País"><?= __('País') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('pais'); ?>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Código Postal"><?= __('Código Postal') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('codigo_postal', ['maxlength' => 5]); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Teléfono *"><?= __('Teléfono') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('telefono'); ?>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Correo Electrónico"><?= __('Correo') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('email'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="¿Cómo nos encontro? *"><?= __('¿Cómo nos encontro?') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->select('referido_id', $categoria_referidos); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Tipo de Software *"><?= __('Tipo de Software') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->select('software_id', $softwares); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Estatura *"><?= __('Estatura (cm.)') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('estatura', ['class' => 'da-spinner']); ?>

                                    </div>
                                </div>
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Peso *"><?= __('Peso (kg.)') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('peso', ['class' => 'da-decimal-spinner']); ?>
                                    </div>
                                </div>
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Número de Calzado *"><?= __('Número de Calzado') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->select('numero_calzado_id', $numeroCalzados); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Espalda"><?= __('Dolor de Espalda') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_espalda'); ?>
                                    </div>
                                </div>
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Rodilla"><?= __('Dolor de Rodilla') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_rodilla'); ?>
                                    </div>
                                </div>
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Tobillo"><?= __('Dolor de Tobillo') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_tobillo'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Cadera"><?= __('Dolor de Cadera') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_cadera'); ?>
                                    </div>
                                </div>
                                <div class="span4">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Pies"><?= __('Dolor de Pies') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_pies'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="row-fluid">
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Quiere recibir notificaciones"><?= __('¿Quiere recibir notificaciones?') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('recibir_notificaciones'); ?>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Sucursal"><?= __('Sucursal') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->select('sucursal_id', $sucursals); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Patología"><?= __('Patología') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->textarea('patologia', ['class' => 'span6']); ?>
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