<div class="grid_4">
    <div class="da-panel collapsible">
        <div class="da-panel-header">
            <span class="da-panel-title">
                <?= $this->Html->image('icons/color/pencil.png', ['alt' => 'Editar Talla de Calzado']) ?>
                <?= __('Editar Talla de Calzado # ') . h($numeroCalzado->id) ?>
            </span>
            <span class="da-panel-toggler"></span>
        </div>
        <div class="da-panel-toolbar top">
            <ul>
                <li>
                    <?= $this->Html->link($this->Html->image('icons/color/text_list_bullets.png', ['alt' => 'Administrar Tallas de Calzado']) . ' ' . __('Administrar'),
                        ['action' => 'administrar'],
                        ['escape' => false]) ?>
                </li>
            </ul>
        </div>
        <div class="da-panel-content">
            <div class="da-message info">
                Campos con <span class="required">*</span> son requeridos.
            </div>
            <?= $this->Form->create($numeroCalzado, ['class' => 'da-form']) ?>
            <div class="da-form-inline">
                <div class="da-form-row">
                    <div class="da-form-col-3-8">
                        <label><span class="da-tooltip-n" title="Mexicano *"><?= __('Mexicano') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item small">
                            <?php echo $this->Form->text('mexicano', ['type' => 'number']); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-3-8">
                        <label><span class="da-tooltip-n" title="Italiano Millitrex *"><?= __('Italiano Millitrex') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item small">
                            <?php echo $this->Form->text('italiano_millitrex', ['type' => 'number']); ?>
                        </div>
                    </div>
                </div>
                <div class="da-form-row">
                    <div class="da-form-col-3-8">
                        <label> <span class="da-tooltip-n" title="Italiano FreeStep *"><?= __('Italiano FreeStep') ?></span> <span class="required">*</span></label>
                        <div class="da-form-item small">
                            <?php echo $this->Form->text('italiano_freestep', ['type' => 'number']); ?>
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