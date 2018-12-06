<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataRow $dataRow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Data Rows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['controller' => 'DataSheets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['controller' => 'DataSheets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataRows form large-9 medium-8 columns content">
    <?= $this->Form->create($dataRow) ?>
    <fieldset>
        <legend><?= __('Add Data Row') ?></legend>
        <?php
            echo $this->Form->control('seq');
            echo $this->Form->control('office_center');
            echo $this->Form->control('fullname');
            echo $this->Form->control('farmer_code');
            echo $this->Form->control('code');
            echo $this->Form->control('year');
            echo $this->Form->control('plant_type');
            echo $this->Form->control('ppm_as');
            echo $this->Form->control('ppm_cd');
            echo $this->Form->control('ppm_pb');
            echo $this->Form->control('ppm_cr');
            echo $this->Form->control('ppm_hg');
            echo $this->Form->control('oc_item');
            echo $this->Form->control('oc_weight');
            echo $this->Form->control('py_item');
            echo $this->Form->control('py_weight');
            echo $this->Form->control('op_item');
            echo $this->Form->control('op_weight');
            echo $this->Form->control('ca_item');
            echo $this->Form->control('ca_weight');
            echo $this->Form->control('coordinates_e');
            echo $this->Form->control('coordinates_n');
            echo $this->Form->control('high');
            echo $this->Form->control('description');
            echo $this->Form->control('coliform');
            echo $this->Form->control('fecal');
            echo $this->Form->control('nutrient_cu');
            echo $this->Form->control('nutrient_ca');
            echo $this->Form->control('chemical_do');
            echo $this->Form->control('chemical_bod');
            echo $this->Form->control('chemical_no3n');
            echo $this->Form->control('chemical_nh3n');
            echo $this->Form->control('data_sheet_id', ['options' => $dataSheets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
