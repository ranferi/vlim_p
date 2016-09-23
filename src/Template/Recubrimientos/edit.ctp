<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recubrimiento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recubrimiento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recubrimientos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="recubrimientos form large-9 medium-8 columns content">
    <?= $this->Form->create($recubrimiento) ?>
    <fieldset>
        <legend><?= __('Edit Recubrimiento') ?></legend>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
