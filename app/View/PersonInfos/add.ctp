<div class="personInfos form">
<?php echo $this->Form->create('PersonInfo'); ?>
	<fieldset>
		<legend><?php echo __('Participate?'); ?></legend>

	<?php
	echo "この勉強会に参加します";
		echo $this->Form->input('Seminar_id',
															array(
																'type'=>'hidden',
																'value'=>$seminarId));
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
<?php echo $this->Form->end(__('OK')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Return'), '/Seminars/view/'.$seminarId); ?></li>
	</ul>
</div>
