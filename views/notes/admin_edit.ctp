<div class="notes form">
<?php echo $this->Form->create('Note');?>
	<fieldset>
		<legend><?php __('Admin Edit Note'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('note');
		echo $this->Form->input('user_id');
		echo $this->Form->input('video_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Note.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Note.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos', true), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video', true), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>