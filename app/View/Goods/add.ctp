<div class="goods form">
<?php echo $this->Form->create('Good'); ?>
	<fieldset>
		<legend><?php echo __('Add Good'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('mail');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?></li>
	</ul>
</div>
