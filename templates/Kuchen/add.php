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
            <?= $this->Html->link(__('List Kuchen'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kuchen form content">
            <?= $this->Form->create($kuchen) ?>
            <fieldset>
                <legend><?= __('Add Kuchen') ?></legend>
                <?php
                    echo $this->Form->control('Mohnkuchen');
                    echo $this->Form->control('Bienenstich');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
