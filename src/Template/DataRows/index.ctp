<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataRow[]|\Cake\Collection\CollectionInterface $dataRows
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Data Row'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Data Sheets'), ['controller' => 'DataSheets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['controller' => 'DataSheets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataRows index large-9 medium-8 columns content">
    <h3><?= __('Data Rows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('office_center') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fullname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('farmer_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plant_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ppm_as') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ppm_cd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ppm_pb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ppm_cr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ppm_hg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oc_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('oc_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('py_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('py_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('op_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('op_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ca_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordinates_e') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordinates_n') ?></th>
                <th scope="col"><?= $this->Paginator->sort('high') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coliform') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrient_cu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrient_ca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemical_do') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemical_bod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemical_no3n') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemical_nh3n') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_sheet_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataRows as $dataRow): ?>
            <tr>
                <td><?= h($dataRow->id) ?></td>
                <td><?= $this->Number->format($dataRow->seq) ?></td>
                <td><?= h($dataRow->office_center) ?></td>
                <td><?= h($dataRow->fullname) ?></td>
                <td><?= h($dataRow->farmer_code) ?></td>
                <td><?= h($dataRow->code) ?></td>
                <td><?= $this->Number->format($dataRow->year) ?></td>
                <td><?= h($dataRow->plant_type) ?></td>
                <td><?= h($dataRow->ppm_as) ?></td>
                <td><?= h($dataRow->ppm_cd) ?></td>
                <td><?= h($dataRow->ppm_pb) ?></td>
                <td><?= h($dataRow->ppm_cr) ?></td>
                <td><?= h($dataRow->ppm_hg) ?></td>
                <td><?= h($dataRow->oc_item) ?></td>
                <td><?= h($dataRow->oc_weight) ?></td>
                <td><?= h($dataRow->py_item) ?></td>
                <td><?= h($dataRow->py_weight) ?></td>
                <td><?= h($dataRow->op_item) ?></td>
                <td><?= h($dataRow->op_weight) ?></td>
                <td><?= h($dataRow->ca_item) ?></td>
                <td><?= h($dataRow->ca_weight) ?></td>
                <td><?= $this->Number->format($dataRow->coordinates_e) ?></td>
                <td><?= $this->Number->format($dataRow->coordinates_n) ?></td>
                <td><?= $this->Number->format($dataRow->high) ?></td>
                <td><?= h($dataRow->created) ?></td>
                <td><?= h($dataRow->coliform) ?></td>
                <td><?= h($dataRow->fecal) ?></td>
                <td><?= h($dataRow->nutrient_cu) ?></td>
                <td><?= h($dataRow->nutrient_ca) ?></td>
                <td><?= h($dataRow->chemical_do) ?></td>
                <td><?= h($dataRow->chemical_bod) ?></td>
                <td><?= h($dataRow->chemical_no3n) ?></td>
                <td><?= h($dataRow->chemical_nh3n) ?></td>
                <td><?= $dataRow->has('data_sheet') ? $this->Html->link($dataRow->data_sheet->name, ['controller' => 'DataSheets', 'action' => 'view', $dataRow->data_sheet->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dataRow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataRow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataRow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataRow->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
