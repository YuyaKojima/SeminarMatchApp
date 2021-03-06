<div class="seminars form">
<?php echo $this->Form->create('Seminar'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seminar'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category',array('label'=>'カテゴリー'));
		echo $this->Form->input('seminar_name',array('label'=>'勉強会名'));
		echo $this->Form->input('seminar_cnt',array('label'=>'予定回数'));
		echo $this->Form->input('seminar_time',array('label'=>'一回ごとの所要時間'));
		echo $this->Form->input('purpose',array('label'=>'開催動機'));
		echo $this->Form->input('outcome',array('label'=>'成果物・得られるもの'));
		echo $this->Form->input('prepare',array('label'=>'事前準備・持ち物'));
		echo $this->Form->input('subject',array('label'=>'対象'));
		echo $this->Form->input('detail',array('label'=>'詳細'));
		echo $this->Form->input('min_persons',array('label'=>'最低人数'));
		echo $this->Form->input('max_persons',array('label'=>'定員'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seminar.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Seminar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seminars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Person Infos'), array('controller' => 'person_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Info'), array('controller' => 'person_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Top'), array('controller' => 'tops', 'action' => 'index')); ?> </li>
	</ul>
</div>
