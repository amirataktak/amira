<div class="deals view">
<h2><?php echo __('Deal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Deb'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['date_deb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Fin'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['date_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancien Prix'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['ancien_prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nouveau Prix'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['nouveau_prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conditions'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['conditions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remise'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['remise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comission'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['comission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantite'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['quantite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deal['Ville']['id'], array('controller' => 'villes', 'action' => 'view', $deal['Ville']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($deal['Deal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sous Categorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deal['SousCategorie']['id'], array('controller' => 'sous_categories', 'action' => 'view', $deal['SousCategorie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partenaire'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deal['Partenaire']['id'], array('controller' => 'partenaires', 'action' => 'view', $deal['Partenaire']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deal'), array('action' => 'edit', $deal['Deal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deal'), array('action' => 'delete', $deal['Deal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deal['Deal']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Villes'), array('controller' => 'villes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville'), array('controller' => 'villes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sous Categories'), array('controller' => 'sous_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sous Categorie'), array('controller' => 'sous_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partenaires'), array('controller' => 'partenaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partenaire'), array('controller' => 'partenaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires'), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire'), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ligne Commandes'), array('controller' => 'ligne_commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ligne Commande'), array('controller' => 'ligne_commandes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Commentaires'); ?></h3>
	<?php if (!empty($deal['Commentaire'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Detail'); ?></th>
		<th><?php echo __('Deal Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deal['Commentaire'] as $commentaire): ?>
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
<div class="related">
	<h3><?php echo __('Related Ligne Commandes'); ?></h3>
	<?php if (!empty($deal['LigneCommande'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Deal Id'); ?></th>
		<th><?php echo __('Commande Id'); ?></th>
		<th><?php echo __('Qte'); ?></th>
		<th><?php echo __('Prix'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deal['LigneCommande'] as $ligneCommande): ?>
		<tr>
			<td><?php echo $ligneCommande['deal_id']; ?></td>
			<td><?php echo $ligneCommande['commande_id']; ?></td>
			<td><?php echo $ligneCommande['qte']; ?></td>
			<td><?php echo $ligneCommande['prix']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ligne_commandes', 'action' => 'view', $ligneCommande['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ligne_commandes', 'action' => 'edit', $ligneCommande['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ligne_commandes', 'action' => 'delete', $ligneCommande['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ligneCommande['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ligne Commande'), array('controller' => 'ligne_commandes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
