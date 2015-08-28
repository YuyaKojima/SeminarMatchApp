<div class="tops index">
	<h2><?php echo __('Tops'); ?></h2>
  <h4>Welcome to SEATTLE SEMINAR</h4>
  <h5>We are so glad to help you to meet special seminars.</h5>

</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
    <li><?php echo $this->Html->link(__('開催決定勉強会'),array('controller' => 'seminars', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('参加者募集勉強会'), array('controller' => 'seminars', 'action' => 'suggested')); ?> </li>
		<li><?php echo $this->Html->link(__('勉強会リクエスト一覧'), array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>
