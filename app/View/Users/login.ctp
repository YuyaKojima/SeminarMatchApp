<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Plese enter your email and password'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
	<h3><?php echo __('First Time?'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Join Us'), array('action' => 'add')); ?></li>
	</ul>
</div>
