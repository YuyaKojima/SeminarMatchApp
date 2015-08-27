<div class="seminars view">
<h2><?php echo __('Seminar'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seminar Name'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['seminar_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persons'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['persons']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seminar Cnt'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['seminar_cnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seminar Time'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['seminar_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purpose'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['purpose']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Persons'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['max_persons']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outcome'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['outcome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prepare'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['prepare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Persons'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['min_persons']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['update_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($seminar['Seminar']['delete_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seminar'), array('action' => 'edit', $seminar['Seminar']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seminar'), array('action' => 'delete', $seminar['Seminar']['id']), array(), __('Are you sure you want to delete # %s?', $seminar['Seminar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seminars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seminar'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('controller' => 'person_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Info'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Person Infos'); ?></h3>
	<?php if (!empty($seminar['PersonInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seminar Id'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seminar['PersonInfo'] as $personInfo): ?>
		<tr>
			<td><?php echo $personInfo['id']; ?></td>
			<td><?php echo $personInfo['Seminar_id']; ?></td>
			<td><?php echo $personInfo['mail']; ?></td>
			<td><?php echo $personInfo['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'person_infos', 'action' => 'view', $personInfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'person_infos', 'action' => 'edit', $personInfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'person_infos', 'action' => 'delete', $personInfo['id']), array(), __('Are you sure you want to delete # %s?', $personInfo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person Info'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
