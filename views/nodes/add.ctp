<div class="nodes form">
<?php echo $this->Form->create('Node');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Node', true)); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Nodes', true)), array('action' => 'index'));?></li>
	</ul>
</div>