<?php $this->Html->addCrumb('Avisos', '/avisos'); ?>
<?php $this->Html->addCrumb('Editar', ['controller' => 'Avisos', 'action' => 'editar']); ?>
<div class="row-fluid">
    <div class="span12">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title"><i class="icol-pencil"></i> <?= __('Editar Aviso # ') .  h($aviso->id) ?></span>
                <span class="da-panel-toggler"></span>
            </div>
            <div class="da-panel-toolbar">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?= $this->Html->link('<i class="icol-magnifier"></i>' . ' ' . __('Ver'),
                            ['action' => 'ver', $aviso->id], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="icol-cross"></i>' . ' ' . __('Eliminar'),
                            ['action' => 'eliminar', $aviso->id],
                            ['class' => 'btn', 'confirm' => __('¿Estás seguro de querer eliminar # {0}?', $aviso->id), 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-add"></i>' . ' ' . __('Crear'),
                            ['action' => 'crear'], ['class' => 'btn', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="icol-text-list-bullets"></i>' . ' ' . __('Administrar'),
                            ['action' => 'administrar'], ['class' => 'btn', 'escape' => false]) ?>
                    </div>
                </div>
            </div>
            <div class="da-panel-content da-form-container">
                <div class="da-message info">Campos con <span class="required">*</span> son requeridos.</div>
                <?= $this->Form->create($aviso, ['class' => 'da-form']) ?>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Título *"><?= __('Título') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->text('titulo', ['class' => 'span6']); ?>
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Empresa *"><?= __('Empresa') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->select('empresa_id',  $empresas); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->hidden('usuario_id', ['value' => 1]); ?>
                        <div class="da-form-row">
                            <label class="da-form-label"><span rel="tooltip" data-placement="top" title="Mensaje *"><?= __('Mensaje') ?></span> <span class="required">*</span></label>
                            <div class="da-form-item">
                                <?php echo $this->Form->textarea('mensaje', ['id' => 'mensaje']); ?>
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