<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DataSheet[]|\Cake\Collection\CollectionInterface $dataSheets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Data Sheet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Data Rows'), ['controller' => 'DataRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Row'), ['controller' => 'DataRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataSheets index large-9 medium-8 columns content">
    <h3><?= __('Data Sheets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataSheets as $dataSheet): ?>
            <tr>
                <td><?= h($dataSheet->id) ?></td>
                <td><?= h($dataSheet->name) ?></td>
                <td><?= $this->Number->format($dataSheet->seq) ?></td>
                <td><?= h($dataSheet->created) ?></td>
                <td><?= h($dataSheet->modified) ?></td>
                <td><?= h($dataSheet->data_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dataSheet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataSheet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataSheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataSheet->id)]) ?>
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
