<div class="requests form">
<?php echo $this->Form->create('Request'); ?>
	<fieldset>
		<legend><?php echo __('Add Request'); ?></legend>
	<?php
		echo $this->Form->input('seminar_name');
		echo $this->Form->input('good_cnt');
		echo $this->Form->input('create_time');
		echo $this->Form->input('update_time');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('teacher_cnt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requests'), array('action' => 'index')); ?></li>
	</ul>
</div>
