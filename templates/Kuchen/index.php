<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kuchen[]|\Cake\Collection\CollectionInterface $kuchen
 */
?>
<div class="kuchen index content">
    <?= $this->Html->link(__('New Kuchen'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kuchen') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Apfelkuchen') ?></th>
                    <th><?= $this->Paginator->sort('Mohnkuchen') ?></th>
                    <th><?= $this->Paginator->sort('Bienenstich') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kuchen as $kuchen): ?>
                <tr>
                    <td><?= $this->Number->format($kuchen->Apfelkuchen) ?></td>
                    <td><?= $this->Number->format($kuchen->Mohnkuchen) ?></td>
                    <td><?= $this->Number->format($kuchen->Bienenstich) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kuchen->Apfelkuchen]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kuchen->Apfelkuchen]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kuchen->Apfelkuchen], ['confirm' => __('Are you sure you want to delete # {0}?', $kuchen->Apfelkuchen)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
