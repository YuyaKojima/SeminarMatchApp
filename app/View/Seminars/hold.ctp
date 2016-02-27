<div class="hold form">
<?php echo $this->Form->create('Hold'); ?>
	<fieldset>
		<legend><?php echo __('Hold?'); ?></legend>

	<?php
  	echo "Hold this seminar?";
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Return'), '/Seminars/suggested'); ?></li>
	</ul>
</div>
