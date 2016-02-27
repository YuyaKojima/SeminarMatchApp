<div class="personInfos form">
<?php echo $this->Form->create('PersonInfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Person Info'); ?></legend>

	<?php
	echo "講師を希望します";
		echo $this->Form->input('Request_id',
															array(
																'type'=>'hidden',
																'value'=>$requestId));
		echo $this->Form->input('mail',
															array(
																'type'=>'hidden',
																'value'=>$user_data['email']));


		echo $this->Form->input('name',
															array(
																'type'=>'hidden',
																'value'=>$user_data['username']));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Return'), '/Requests/view/'.$requestId); ?></li>
	</ul>
</div>
