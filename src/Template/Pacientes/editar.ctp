<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar Pacientes']) ?>
                <?= __('Editar Paciente') . h($paciente->id) ?>
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
                        <label><span class="da-tooltip-n" title="Nombre Completo *"><?= __('Nombre Completo') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item ">
                            <?php echo $this->Form->text('nombre_completo');; ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Genero *"><?= __('Genero') ?></span> <span class="required">*</span></label>
                        <ul class="da-form-list">
                            <?php echo $this->Form->radio(
                                'genero',
                                [
                                    ['value' => 0, 'text' => 'Masculino'],
                                    ['value' => 1, 'text' => 'Femenino'],
                                ]
                            ); ?>

                        </ul>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Fecha de Nacimiento *"><?= __('Fecha de Nacimiento') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('fecha_nacimiento', ['id' => 'da-ex-datetimepicker']); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Calle"><?= __('Calle') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('calle_no'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Colonia"><?= __('Colonia') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('colonia'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Delegación y Municipio"><?= __('Delegación y Municipio') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('delegacion_municipio'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Ciudad y Estado"><?= __('Ciudad y Estado') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('ciudad_estado'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="País"><?= __('País') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('pais'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Código Postal"><?= __('Código Postal') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('cp', ['maxlength' => 5]); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Teléfono *"><?= __('Teléfono') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('telefono'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Correo Electrónico"><?= __('Correo') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('correo'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="¿Cómo nos encontro? *"><?= __('¿Cómo nos encontro?') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('donde_nos_encontro'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Referencia Doctor"><?= __('Referencia Doctor') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('ref_doctor'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Estatura *"><?= __('Estatura (cm.)') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('estatura', ['id' => 'da-ex-s1']); ?>

                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Peso *"><?= __('Peso (kg.)') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->text('peso', ['id' => 'da-ex-s2']); ?>
                        </div>
                    </div>
                    <div class="da-form-col-4-8">
                        <label><span class="da-tooltip-n" title="Número de Calzado *"><?= __('Número de Calzado') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->select('numero_calzado_id', $numeroCalzados); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Espalda"><?= __('Dolor de Espalda') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_espalda'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span  class="da-tooltip-n" title="Dolor de Rodilla"><?= __('Dolor de Rodilla') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_rodilla'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Tobillo"><?= __('Dolor de Tobillo') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_tobillo'); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Cadera"><?= __('Dolor de Cadera') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_cadera'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="Dolor de Pies"><?= __('Dolor de Pies') ?></span></label>
                        <div class="da-form-item">
                            <?php echo $this->Form->checkbox('dolor_pies'); ?>
                        </div>
                    </div>
                    <div class="da-form-col-2-8">
                        <label><span class="da-tooltip-n" title="¿Deseas recibir notificaciones?"><?= __('Notificaciones') ?></span></label>
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
                    <?= $this->Form->button(__('Modificar'), ['class' => 'da-button blue']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>