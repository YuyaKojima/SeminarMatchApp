<div class="requests index">
	<h2><?php echo __('Requests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id','Request番号'); ?></th>
			<th><?php echo $this->Paginator->sort('seminar_name','勉強会名'); ?></th>
			<th><?php echo $this->Paginator->sort('detail','詳細'); ?></th>
			<th><?php echo $this->Paginator->sort('good_cnt','Good Points'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time','最終更新日時'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($requests as $request): ?>
	<tr>
		<td><?php echo h($request['Request']['id']); ?>&nbsp;</td>
		<td><?php echo h($request['Request']['seminar_name']); ?>&nbsp;</td>
		<td><?php echo h($request['Request']['detail']); ?>&nbsp;</td>
		<td><?php echo h($request['Request']['good_cnt']); ?>&nbsp;</td>
		<td><?php echo h($request['Request']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Good!'), array('action' => 'addGood', $request['Request']['id'])); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $request['Request']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $request['Request']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $request['Request']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $request['Request']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Request'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Top'), array('controller' => 'tops', 'action' => 'index')); ?> </li>
	</ul>
</div>
