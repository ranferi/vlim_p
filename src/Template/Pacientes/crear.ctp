<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/add.png', ['alt' => 'Crear Avisos']) ?>
                <?= __('Crear Paciente') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Pacientes']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>
            </ul>
        </div>
        <div class="da-panel-content">
            <div class="da-message info">
                Campos con <span class="required">*</span> son requeridos.
            </div>
            <?= $this->Form->create($paciente, ['class' => 'da-form']) ?>
            <div class="da-form-inline">
                <div class="da-form-row">
                    <div class="da-form-col-8-8">
                        <label class="da-tooltip-n" title="Nombre Completo *"><?= __('Nombre Completo') ?> <span class="required">*</span></label>
                        <div class="da-form-item ">
                            <?php echo $this->Form->text('nombre_completo');; ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Genero *"><?= __('Genero') ?> <span class="required">*</span></label>
                        <ul class="da-form-list">
                            <li><input name="genero" type="radio"> <label>Masculino</label></li>
                            <li><input name="gendero" type="radio"> <label>Femenino</label></li>
                        </ul>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Fecha de Nacimiento *"><?= __('Fecha de Nacimiento') ?> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('fecha_nacimiento', ['id' => 'da-ex-datetimepicker', 'class' => 'hasDatepicker']); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="No. de Calle"><?= __('No. de Calle') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('calle_no'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Colonia"><?= __('Colonia') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('colonia'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Delegación y Municipio"><?= __('Delegación y Municipio') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('delegacion_municipio'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Ciudad y Estado"><?= __('Ciudad y Estado') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('ciudad_estado'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="País"><?= __('País') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('pais'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Código Postal"><?= __('Código Postal') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('cp', ['maxlength' => 5]); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Teléfono *"><?= __('Teléfono') ?> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('telefono'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Correo Electrónico"><?= __('Correo') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('correo'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="¿Cómo nos encontro? *"><?= __('¿Cómo nos encontro?') ?> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('donde_nos_encontro'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Referencia Doctor"><?= __('Referencia Doctor') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('ref_doctor'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label class="da-tooltip-n" title="Estatura *"><?= __('Estatura (cm.)') ?> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <span class="ui-spinner ui-widget">
                                <?php echo $this->Form->text('estatura', ['id' => 'da-ex-s1']); ?>
                                <span class="ui-spinner-buttons">
                                    <span class="ui-spinner-up ui-spinner-button ui-state-default ui-corner-tr">
                                        <span class="ui-icon ui-icon-triangle-1-n">&nbsp;</span>
                                    </span>
                                    <span class="ui-spinner-down ui-spinner-button ui-state-default ui-corner-br">
                                        <span class="ui-icon ui-icon-triangle-1-s">&nbsp;</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label class="da-tooltip-n" title="Peso *"><?= __('Peso (kg.)') ?> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <span class="ui-spinner ui-widget">
                                <?php echo $this->Form->text('peso', ['id' => 'da-ex-s2']); ?>
                                <span class="ui-spinner-buttons">
                                    <span class="ui-spinner-up ui-spinner-button ui-state-default ui-corner-tr">
                                        <span class="ui-icon ui-icon-triangle-1-n">&nbsp;</span>
                                    </span>
                                    <span class="ui-spinner-down ui-spinner-button ui-state-default ui-corner-br">
                                        <span class="ui-icon ui-icon-triangle-1-s">&nbsp;</span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label class="da-tooltip-n" title="Número de Calzado *"><?= __('Número de Calzado') ?> </label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('numero_calzado_id', $numeroCalzados); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label class="da-tooltip-n" title="Dolor de Espalda"><?= __('Dolor de Espalda') ?> </label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_espalda'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label class="da-tooltip-n" title="Dolor de Rodilla"><?= __('Dolor de Rodilla') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_rodilla'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label class="da-tooltip-n" title="Dolor de Tobillo"><?= __('Dolor de Tobillo') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_tobillo'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Cadera"><?= __('Dolor de Cadera') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_cadera'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Pies"><?= __('Dolor de Pies') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_pies'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="¿Deseas recibir notificaciones?"><?= __('Notificaciones') ?></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('notificaciones'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Patología"><?= __('Patología') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('patologia'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-button-row">
                    <?= $this->Form->button(__('Enviar'), ['class' => 'da-button blue']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>