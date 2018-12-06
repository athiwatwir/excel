<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Data $data
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $data->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $data->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Datas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['controller' => 'DataSheets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['controller' => 'DataSheets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datas form large-9 medium-8 columns content">
    <?= $this->Form->create($data) ?>
    <fieldset>
        <legend><?= __('Edit Data') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
