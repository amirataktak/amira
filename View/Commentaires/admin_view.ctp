<div class="commentaires view">
<h2><?php echo __('Commentaire'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentaire['Commentaire']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($commentaire['Commentaire']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentaire['Deal']['id'], array('controller' => 'deals', 'action' => 'view', $commentaire['Deal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($commentaire['Commentaire']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentaire['Client']['id'], array('controller' => 'clients', 'action' => 'view', $commentaire['Client']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commentaire'), array('action' => 'edit', $commentaire['Commentaire']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commentaire'), array('action' => 'delete', $commentaire['Commentaire']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commentaire['Commentaire']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
