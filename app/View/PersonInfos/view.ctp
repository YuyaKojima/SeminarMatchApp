<div class="personInfos view">
<h2><?php echo __('Person Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personInfo['PersonInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seminar Id'); ?></dt>
		<dd>
			<?php echo h($personInfo['PersonInfo']['Seminar_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($personInfo['PersonInfo']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($personInfo['PersonInfo']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person Info'), array('action' => 'edit', $personInfo['PersonInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person Info'), array('action' => 'delete', $personInfo['PersonInfo']['id']), array(), __('Are you sure you want to delete # %s?', $personInfo['PersonInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
