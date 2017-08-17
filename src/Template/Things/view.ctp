<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Thing $thing
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Thing'), ['action' => 'edit', $thing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thing'), ['action' => 'delete', $thing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="things view large-9 medium-8 columns content">
    <h3><?= h($thing->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($thing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($thing->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($thing->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($thing->modified) ?></td>
        </tr>
    </table>
</div>
