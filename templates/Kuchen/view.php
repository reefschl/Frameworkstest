<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kuchen $kuchen
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kuchen'), ['action' => 'edit', $kuchen->Apfelkuchen], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kuchen'), ['action' => 'delete', $kuchen->Apfelkuchen], ['confirm' => __('Are you sure you want to delete # {0}?', $kuchen->Apfelkuchen), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kuchen'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kuchen'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kuchen view content">
            <h3><?= h($kuchen->Apfelkuchen) ?></h3>
            <table>
                <tr>
                    <th><?= __('Apfelkuchen') ?></th>
                    <td><?= $this->Number->format($kuchen->Apfelkuchen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mohnkuchen') ?></th>
                    <td><?= $this->Number->format($kuchen->Mohnkuchen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bienenstich') ?></th>
                    <td><?= $this->Number->format($kuchen->Bienenstich) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
