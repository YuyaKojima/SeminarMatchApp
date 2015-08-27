<div class="requests view">
<h2><?php echo __('Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($request['Request']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seminar Name'); ?></dt>
		<dd>
			<?php echo h($request['Request']['seminar_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good Cnt'); ?></dt>
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
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($request['Request']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teacher Cnt'); ?></dt>
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
	</ul>
</div>
