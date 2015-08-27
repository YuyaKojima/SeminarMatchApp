<div class="personInfos form">
<?php echo $this->Form->create('PersonInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PersonInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
