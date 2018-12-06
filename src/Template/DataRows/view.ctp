<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataRow $dataRow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Data Row'), ['action' => 'edit', $dataRow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Row'), ['action' => 'delete', $dataRow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataRow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Rows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Row'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['controller' => 'DataSheets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['controller' => 'DataSheets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dataRows view large-9 medium-8 columns content">
    <h3><?= h($dataRow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($dataRow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Office Center') ?></th>
            <td><?= h($dataRow->office_center) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($dataRow->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Farmer Code') ?></th>
            <td><?= h($dataRow->farmer_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($dataRow->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plant Type') ?></th>
            <td><?= h($dataRow->plant_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppm As') ?></th>
            <td><?= h($dataRow->ppm_as) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppm Cd') ?></th>
            <td><?= h($dataRow->ppm_cd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppm Pb') ?></th>
            <td><?= h($dataRow->ppm_pb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppm Cr') ?></th>
            <td><?= h($dataRow->ppm_cr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ppm Hg') ?></th>
            <td><?= h($dataRow->ppm_hg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oc Item') ?></th>
            <td><?= h($dataRow->oc_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oc Weight') ?></th>
            <td><?= h($dataRow->oc_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Py Item') ?></th>
            <td><?= h($dataRow->py_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Py Weight') ?></th>
            <td><?= h($dataRow->py_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Op Item') ?></th>
            <td><?= h($dataRow->op_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Op Weight') ?></th>
            <td><?= h($dataRow->op_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca Item') ?></th>
            <td><?= h($dataRow->ca_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ca Weight') ?></th>
            <td><?= h($dataRow->ca_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coliform') ?></th>
            <td><?= h($dataRow->coliform) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecal') ?></th>
            <td><?= h($dataRow->fecal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrient Cu') ?></th>
            <td><?= h($dataRow->nutrient_cu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrient Ca') ?></th>
            <td><?= h($dataRow->nutrient_ca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chemical Do') ?></th>
            <td><?= h($dataRow->chemical_do) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chemical Bod') ?></th>
            <td><?= h($dataRow->chemical_bod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chemical No3n') ?></th>
            <td><?= h($dataRow->chemical_no3n) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chemical Nh3n') ?></th>
            <td><?= h($dataRow->chemical_nh3n) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Sheet') ?></th>
            <td><?= $dataRow->has('data_sheet') ? $this->Html->link($dataRow->data_sheet->name, ['controller' => 'DataSheets', 'action' => 'view', $dataRow->data_sheet->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($dataRow->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($dataRow->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordinates E') ?></th>
            <td><?= $this->Number->format($dataRow->coordinates_e) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordinates N') ?></th>
            <td><?= $this->Number->format($dataRow->coordinates_n) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('High') ?></th>
            <td><?= $this->Number->format($dataRow->high) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dataRow->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($dataRow->description)); ?>
    </div>
</div>
