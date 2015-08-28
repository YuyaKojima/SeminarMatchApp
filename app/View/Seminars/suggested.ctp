<div class="seminars index">
	<h2><?php echo __('Seminars'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
		<?php $this->Form->label('id','番号') ?>
	<tr>
			<th><?php echo $this->Paginator->sort('id','番号');?></th>
			<th><?php echo $this->Paginator->sort('category','カテゴリー'); ?></th>
			<th><?php echo $this->Paginator->sort('seminar_name','勉強会名'); ?></th>
			<th><?php echo $this->Paginator->sort('persons','参加希望人数'); ?></th>
			<th><?php echo $this->Paginator->sort('seminar_cnt','予定回数'); ?></th>
			<th><?php echo $this->Paginator->sort('seminar_time','一回ごとの所要時間'); ?></th>
			<th><?php echo $this->Paginator->sort('purpose','開催動機'); ?></th>
			<th><?php echo $this->Paginator->sort('outcome','成果物'); ?></th>
			<th><?php echo $this->Paginator->sort('subject','対象'); ?></th>
			<th><?php echo $this->Paginator->sort('min_persons','最低人数'); ?></th>
			<th><?php echo $this->Paginator->sort('max_persons','定員'); ?></th>
			<th><?php echo $this->Paginator->sort('update_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($seminars as $seminar): ?>
	<tr>
		<td><?php echo h($seminar['Seminar']['id']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['category']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['seminar_name']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['persons']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['seminar_cnt']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['seminar_time']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['purpose']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['outcome']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['subject']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['min_persons']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['max_persons']); ?>&nbsp;</td>
		<td><?php echo h($seminar['Seminar']['update_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seminar['Seminar']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seminar['Seminar']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seminar['Seminar']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seminar['Seminar']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Seminar'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('controller' => 'person_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Info'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Top'),array('controller' => 'tops', 'action' => 'index')); ?> </li>
	</ul>
</div>
