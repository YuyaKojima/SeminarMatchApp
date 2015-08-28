<div class="requests view">
<h2><?php echo __('Request'); ?></h2>
	<dl>
		<dt><?php echo __('番号'); ?></dt>
		<dd>
			<?php echo h($request['Request']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('勉強会名'); ?></dt>
		<dd>
			<?php echo h($request['Request']['seminar_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('詳細'); ?></dt>
		<dd>
			<?php echo h($request['Request']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good Points'); ?></dt>
		<dd>
			<?php echo h($request['Request']['good_cnt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create Time'); ?></dt>
		<dd>
			<?php echo h($request['Request']['create_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Time'); ?></dt>
		<dd>
			<?php echo h($request['Request']['update_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teachers'); ?></dt>
		<dd>
			<?php echo h($request['Request']['teacher_cnt']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Request'), array('action' => 'edit', $request['Request']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Request'), array('action' => 'delete', $request['Request']['id']), array(), __('Are you sure you want to delete # %s?', $request['Request']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Top'), array('controller' => 'tops', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('講師希望者情報'); ?></h3>
	<?php if (!empty($request['PersonInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Request Id'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($request['PersonInfo'] as $personInfo): ?>
		<tr>
			<td><?php echo $personInfo['id']; ?></td>
			<td><?php echo $personInfo['Request_id']; ?></td>
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
			<li><?php echo $this->Html->link(__('講師希望'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
