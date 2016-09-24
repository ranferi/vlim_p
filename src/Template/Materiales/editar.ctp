<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materiale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="materiales form large-9 medium-8 columns content">
    <?= $this->Form->create($materiale) ?>
    <fieldset>
        <legend><?= __('Edit Materiale') ?></legend>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
