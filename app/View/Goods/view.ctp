<div class="goods view">
<h2><?php echo __('Good'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($good['Good']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($good['Good']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($good['Good']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($good['Good']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($good['Good']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($good['Good']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Good'), array('action' => 'edit', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Good'), array('action' => 'delete', $good['Good']['id']), array(), __('Are you sure you want to delete # %s?', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('action' => 'add')); ?> </li>
	</ul>
</div>
