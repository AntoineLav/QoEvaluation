<div class="videos form">
<?php echo $this->Form->create('Video');?>
	<fieldset>
		<legend><?php __('Admin Edit Video'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Video.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Video.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Videos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Notes', true), array('controller' => 'notes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note', true), array('controller' => 'notes', 'action' => 'add')); ?> </li>
	</ul>
</div>