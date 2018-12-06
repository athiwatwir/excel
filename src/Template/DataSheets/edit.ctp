<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataSheet $dataSheet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dataSheet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dataSheet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Data Rows'), ['controller' => 'DataRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Row'), ['controller' => 'DataRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataSheets form large-9 medium-8 columns content">
    <?= $this->Form->create($dataSheet) ?>
    <fieldset>
        <legend><?= __('Edit Data Sheet') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('seq');
            echo $this->Form->control('data_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
