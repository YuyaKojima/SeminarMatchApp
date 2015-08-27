<div class="personInfos form">
<?php echo $this->Form->create('PersonInfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Person Info'); ?></legend>
	<?php
		echo $this->Form->input('Seminar_id');
		echo $this->Form->input('mail');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Person Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
