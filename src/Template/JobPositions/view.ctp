<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JobPosition $jobPosition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job Position'), ['action' => 'edit', $jobPosition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job Position'), ['action' => 'delete', $jobPosition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobPosition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Job Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee Information'), ['controller' => 'EmployeeInformation', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee Information'), ['controller' => 'EmployeeInformation', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobPositions view large-9 medium-8 columns content">
    <h3><?= h($jobPosition->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($jobPosition->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jobPosition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $this->Number->format($jobPosition->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jobPosition->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jobPosition->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($jobPosition->deleted_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employee Information') ?></h4>
        <?php if (!empty($jobPosition->employee_information)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Employee No') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Job Position Id') ?></th>
                <th scope="col"><?= __('Salary') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Mobile No') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Hired Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Is Als') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted Date') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($jobPosition->employee_information as $employeeInformation): ?>
            <tr>
                <td><?= h($employeeInformation->id) ?></td>
                <td><?= h($employeeInformation->role_id) ?></td>
                <td><?= h($employeeInformation->employee_no) ?></td>
                <td><?= h($employeeInformation->password) ?></td>
                <td><?= h($employeeInformation->last_name) ?></td>
                <td><?= h($employeeInformation->first_name) ?></td>
                <td><?= h($employeeInformation->middle_name) ?></td>
                <td><?= h($employeeInformation->gender) ?></td>
                <td><?= h($employeeInformation->job_position_id) ?></td>
                <td><?= h($employeeInformation->salary) ?></td>
                <td><?= h($employeeInformation->address) ?></td>
                <td><?= h($employeeInformation->mobile_no) ?></td>
                <td><?= h($employeeInformation->email) ?></td>
                <td><?= h($employeeInformation->hired_date) ?></td>
                <td><?= h($employeeInformation->status) ?></td>
                <td><?= h($employeeInformation->is_als) ?></td>
                <td><?= h($employeeInformation->created) ?></td>
                <td><?= h($employeeInformation->modified) ?></td>
                <td><?= h($employeeInformation->deleted_date) ?></td>
                <td><?= h($employeeInformation->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployeeInformation', 'action' => 'view', $employeeInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeeInformation', 'action' => 'edit', $employeeInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeeInformation', 'action' => 'delete', $employeeInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeInformation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
