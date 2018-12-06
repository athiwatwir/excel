<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataSheet $dataSheet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Data Sheet'), ['action' => 'edit', $dataSheet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Sheet'), ['action' => 'delete', $dataSheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataSheet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Rows'), ['controller' => 'DataRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Row'), ['controller' => 'DataRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dataSheets view large-9 medium-8 columns content">
    <h3><?= h($dataSheet->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($dataSheet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($dataSheet->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Id') ?></th>
            <td><?= h($dataSheet->data_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($dataSheet->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dataSheet->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dataSheet->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Data Rows') ?></h4>
        <?php if (!empty($dataSheet->data_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Seq') ?></th>
                <th scope="col"><?= __('Office Center') ?></th>
                <th scope="col"><?= __('Fullname') ?></th>
                <th scope="col"><?= __('Farmer Code') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Plant Type') ?></th>
                <th scope="col"><?= __('Ppm As') ?></th>
                <th scope="col"><?= __('Ppm Cd') ?></th>
                <th scope="col"><?= __('Ppm Pb') ?></th>
                <th scope="col"><?= __('Ppm Cr') ?></th>
                <th scope="col"><?= __('Ppm Hg') ?></th>
                <th scope="col"><?= __('Oc Item') ?></th>
                <th scope="col"><?= __('Oc Weight') ?></th>
                <th scope="col"><?= __('Py Item') ?></th>
                <th scope="col"><?= __('Py Weight') ?></th>
                <th scope="col"><?= __('Op Item') ?></th>
                <th scope="col"><?= __('Op Weight') ?></th>
                <th scope="col"><?= __('Ca Item') ?></th>
                <th scope="col"><?= __('Ca Weight') ?></th>
                <th scope="col"><?= __('Coordinates E') ?></th>
                <th scope="col"><?= __('Coordinates N') ?></th>
                <th scope="col"><?= __('High') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Coliform') ?></th>
                <th scope="col"><?= __('Fecal') ?></th>
                <th scope="col"><?= __('Nutrient Cu') ?></th>
                <th scope="col"><?= __('Nutrient Ca') ?></th>
                <th scope="col"><?= __('Chemical Do') ?></th>
                <th scope="col"><?= __('Chemical Bod') ?></th>
                <th scope="col"><?= __('Chemical No3n') ?></th>
                <th scope="col"><?= __('Chemical Nh3n') ?></th>
                <th scope="col"><?= __('Data Sheet Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dataSheet->data_rows as $dataRows): ?>
            <tr>
                <td><?= h($dataRows->id) ?></td>
                <td><?= h($dataRows->seq) ?></td>
                <td><?= h($dataRows->office_center) ?></td>
                <td><?= h($dataRows->fullname) ?></td>
                <td><?= h($dataRows->farmer_code) ?></td>
                <td><?= h($dataRows->code) ?></td>
                <td><?= h($dataRows->year) ?></td>
                <td><?= h($dataRows->plant_type) ?></td>
                <td><?= h($dataRows->ppm_as) ?></td>
                <td><?= h($dataRows->ppm_cd) ?></td>
                <td><?= h($dataRows->ppm_pb) ?></td>
                <td><?= h($dataRows->ppm_cr) ?></td>
                <td><?= h($dataRows->ppm_hg) ?></td>
                <td><?= h($dataRows->oc_item) ?></td>
                <td><?= h($dataRows->oc_weight) ?></td>
                <td><?= h($dataRows->py_item) ?></td>
                <td><?= h($dataRows->py_weight) ?></td>
                <td><?= h($dataRows->op_item) ?></td>
                <td><?= h($dataRows->op_weight) ?></td>
                <td><?= h($dataRows->ca_item) ?></td>
                <td><?= h($dataRows->ca_weight) ?></td>
                <td><?= h($dataRows->coordinates_e) ?></td>
                <td><?= h($dataRows->coordinates_n) ?></td>
                <td><?= h($dataRows->high) ?></td>
                <td><?= h($dataRows->description) ?></td>
                <td><?= h($dataRows->created) ?></td>
                <td><?= h($dataRows->coliform) ?></td>
                <td><?= h($dataRows->fecal) ?></td>
                <td><?= h($dataRows->nutrient_cu) ?></td>
                <td><?= h($dataRows->nutrient_ca) ?></td>
                <td><?= h($dataRows->chemical_do) ?></td>
                <td><?= h($dataRows->chemical_bod) ?></td>
                <td><?= h($dataRows->chemical_no3n) ?></td>
                <td><?= h($dataRows->chemical_nh3n) ?></td>
                <td><?= h($dataRows->data_sheet_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DataRows', 'action' => 'view', $dataRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DataRows', 'action' => 'edit', $dataRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataRows', 'action' => 'delete', $dataRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
