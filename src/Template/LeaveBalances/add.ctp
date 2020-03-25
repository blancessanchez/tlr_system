<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LeaveBalance $leaveBalance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Leave Balances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employee Information'), ['controller' => 'EmployeeInformation', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee Information'), ['controller' => 'EmployeeInformation', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terms'), ['controller' => 'Terms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Term'), ['controller' => 'Terms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leave Types'), ['controller' => 'LeaveTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Leave Type'), ['controller' => 'LeaveTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="leaveBalances form large-9 medium-8 columns content">
    <?= $this->Form->create($leaveBalance) ?>
    <fieldset>
        <legend><?= __('Add Leave Balance') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employeeInformation]);
            echo $this->Form->control('term_id', ['options' => $terms]);
            echo $this->Form->control('balance');
            echo $this->Form->control('leave_type_id', ['options' => $leaveTypes, 'empty' => true]);
            echo $this->Form->control('deleted_date', ['empty' => true]);
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
