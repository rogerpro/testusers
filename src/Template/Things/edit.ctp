<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Things'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="things form large-9 medium-8 columns content">
    <?= $this->Form->create($thing) ?>
    <fieldset>
        <legend><?= __('Edit Thing') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
