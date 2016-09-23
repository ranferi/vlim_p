<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/add.png', ['alt' => 'Crear Avisos']) ?>
                <?= __('Crear Aviso') ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/add.png', ['alt' => 'Crear Aviso']) . ' ' . __('Crear'),
                        ['action' => 'crear'],
                        ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Avisos']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>
            </ul>
        </div>
        <div class="da-panel-content da-form-container">
            <div class="da-message info">
                Campos con <span class="required">*</span> son requeridos.
            </div>
            <?= $this->Form->create($aviso, ['class' => 'da-form']) ?>
                <div class="da-form-row">
                    <label><?= __('Título') ?> <span class="required">*</span></label>
                    <div class="da-form-item large">
                        <?php echo $this->Form->text('titulo');; ?>
                    </div>
                </div>
                <div class="da-form-row">
                    <label><?= __('Empresa') ?> <span class="required">*</span></label>
                    <div class="da-form-item small">
                        <?php echo $this->Form->select('empresa_id',  $empresas); ?>
                    </div>
                </div>
                <?php echo $this->Form->hidden('usuario_id', ['value' => 1]); ?>
                <div class="da-form-row">
                    <label><?= __('Mensaje') ?> <span class="required">*</span></label>
                    <div class="da-form-item large">
                        <div id="mensaje"></div>
                    </div>
                </div>
                <div class="da-button-row">
                    <?= $this->Form->button(__('Enviar'), ['class' => 'da-button blue']) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

