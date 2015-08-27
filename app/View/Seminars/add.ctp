<div class="seminars form">
<?php echo $this->Form->create('Seminar'); ?>
	<fieldset>
		<legend><?php echo __('Add Seminar'); ?></legend>
	<?php
		echo $this->Form->input('category');
		echo $this->Form->input('seminar_name');
		echo $this->Form->input('persons');
		echo $this->Form->input('seminar_cnt');
		echo $this->Form->input('seminar_time');
		echo $this->Form->input('purpose');
		echo $this->Form->input('max_persons');
		echo $this->Form->input('outcome');
		echo $this->Form->input('prepare');
		echo $this->Form->input('detail');
		echo $this->Form->input('min_persons');
		echo $this->Form->input('subject');
		echo $this->Form->input('create_time');
		echo $this->Form->input('update_time');
		echo $this->Form->input('delete_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seminars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('controller' => 'person_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Info'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
