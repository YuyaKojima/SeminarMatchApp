<div class="requests form">
<?php echo $this->Form->create('Request'); ?>
	<fieldset>
		<legend><?php echo __('Add Request'); ?></legend>
	<?php
		echo $this->Form->input('seminar_name');
		echo $this->Form->input('detail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Top'), array('controller' => 'tops', 'action' => 'index')); ?> </li>
	</ul>
</div>
