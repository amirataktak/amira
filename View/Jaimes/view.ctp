<div class="jaimes view">
<h2><?php echo __('Jaime'); ?></h2>
	<dl>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jaime['Client']['id'], array('controller' => 'clients', 'action' => 'view', $jaime['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jaime['Deal']['titre'], array('controller' => 'deals', 'action' => 'view', $jaime['Deal']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jaime'), array('action' => 'edit', $jaime['Jaime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jaime'), array('action' => 'delete', $jaime['Jaime']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jaime['Jaime']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Jaimes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jaime'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
	</ul>
</div>
