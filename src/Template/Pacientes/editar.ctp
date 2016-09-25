<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-pencil"></i> <?= __('Editar Paciente # ') .  h($paciente->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-magnifier"></i>' . ' ' . __('Ver'),
                            ['action' => 'ver', $paciente->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $paciente->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $paciente->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">
                    Campos con <span class="required">*</span> son requeridos.
                </div>
                <?= $this->Form->create($paciente, ['class' => 'da-form']) ?>
                    <div class="da-form">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Nombre Completo *"><?= __('Nombre Completo') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('nombre_completo', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-4-8">
                                    <label class="da-form-label">
                                        <span rel="tooltip" data-placement="top" title="Genero *"><?= __('Genero') ?></span>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="da-form-item">
                                        <ul class="da-form-list inline">
                                            <?php echo $this->Form->radio('genero', [
                                                    ['value' => 0, 'text' => 'Masculino'],
                                                    ['value' => 1, 'text' => 'Femenino']]); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4-8">
                                    <label class="da-form-label">
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
                                        <?php echo $this->Form->text('correo'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-4-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="¿Cómo nos encontro? *"><?= __('¿Cómo nos encontro?') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('donde_nos_encontro'); ?>
                                    </div>
                                </div>
                                <div class="col-4-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Referencia Doctor"><?= __('Referencia Doctor') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('ref_doctor'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-3-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Estatura *"><?= __('Estatura (cm.)') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('estatura', ['class' => 'da-spinner']); ?>

                                    </div>
                                </div>
                                <div class="col-3-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Peso *"><?= __('Peso (kg.)') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('peso', ['class' => 'da-decimal-spinner']); ?>
                                    </div>
                                </div>
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Número de Calzado *"><?= __('Número de Calzado') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->select('numero_calzado_id', $numeroCalzados); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Espalda"><?= __('Dolor de Espalda') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_espalda'); ?>
                                    </div>
                                </div>
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Rodilla"><?= __('Dolor de Rodilla') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_rodilla'); ?>
                                    </div>
                                </div>
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Tobillo"><?= __('Dolor de Tobillo') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_tobillo'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Cadera"><?= __('Dolor de Cadera') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_cadera'); ?>
                                    </div>
                                </div>
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Dolor de Pies"><?= __('Dolor de Pies') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('dolor_pies'); ?>
                                    </div>
                                </div>
                                <div class="col-2-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="¿Deseas recibir notificaciones?"><?= __('Notificaciones') ?></span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->checkbox('notificaciones'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <div class="da-form-cols">
                                <div class="col-4-8">
                                    <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Patología"><?= __('Patología') ?></span> <span class="required">*</span></label>
                                    <div class="da-form-item">
                                        <?php echo $this->Form->text('patologia'); ?>
                                    </div>
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