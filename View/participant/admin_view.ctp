<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexe'); ?></dt>
		<dd>
			<?php echo h($client['Client']['sexe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($client['Client']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($client['Client']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Naissance'); ?></dt>
		<dd>
			<?php echo h($client['Client']['date_naissance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires'), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire'), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Commandes'); ?></h3>
	<?php if (!empty($client['Commande'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Mode Pay'); ?></th>
		<th><?php echo __('Etat'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Commande'] as $commande): ?>
		<tr>
			<td><?php echo $commande['id']; ?></td>
			<td><?php echo $commande['numero']; ?></td>
			<td><?php echo $commande['mode_pay']; ?></td>
			<td><?php echo $commande['etat']; ?></td>
			<td><?php echo $commande['total']; ?></td>
			<td><?php echo $commande['created']; ?></td>
			<td><?php echo $commande['modified']; ?></td>
			<td><?php echo $commande['client_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'commandes', 'action' => 'view', $commande['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'commandes', 'action' => 'edit', $commande['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'commandes', 'action' => 'delete', $commande['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commande['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Commentaires'); ?></h3>
	<?php if (!empty($client['Commentaire'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Deal Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Commentaire'] as $commentaire): ?>
		<tr>
			<td><?php echo $commentaire['id']; ?></td>
			<td><?php echo $commentaire['detail']; ?></td>
			<td><?php echo $commentaire['deal_id']; ?></td>
			<td><?php echo $commentaire['created']; ?></td>
			<td><?php echo $commentaire['client_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'commentaires', 'action' => 'view', $commentaire['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'commentaires', 'action' => 'edit', $commentaire['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'commentaires', 'action' => 'delete', $commentaire['id']), array('confirm' => __('Are you sure you want to delete # %s?', $commentaire['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commentaire'), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
