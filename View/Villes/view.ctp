<div class="villes view">
<h2><?php echo __('Ville'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ville['Ville']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libelle'); ?></dt>
		<dd>
			<?php echo h($ville['Ville']['libelle']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ville'), array('action' => 'edit', $ville['Ville']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ville'), array('action' => 'delete', $ville['Ville']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ville['Ville']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Villes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ville'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deals'); ?></h3>
	<?php if (!empty($ville['Deal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date Deb'); ?></th>
		<th><?php echo __('Date Fin'); ?></th>
		<th><?php echo __('Ancien Prix'); ?></th>
		<th><?php echo __('Nouveau Prix'); ?></th>
		<th><?php echo __('Conditions'); ?></th>
		<th><?php echo __('Remise'); ?></th>
		<th><?php echo __('Comission'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Quantite'); ?></th>
		<th><?php echo __('Ville Id'); ?></th>
		<th><?php echo __('Etat'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Sous Category Id'); ?></th>
		<th><?php echo __('Partenaire Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ville['Deal'] as $deal): ?>
		<tr>
			<td><?php echo $deal['id']; ?></td>
			<td><?php echo $deal['titre']; ?></td>
			<td><?php echo $deal['description']; ?></td>
			<td><?php echo $deal['date_deb']; ?></td>
			<td><?php echo $deal['date_fin']; ?></td>
			<td><?php echo $deal['ancien_prix']; ?></td>
			<td><?php echo $deal['nouveau_prix']; ?></td>
			<td><?php echo $deal['conditions']; ?></td>
			<td><?php echo $deal['remise']; ?></td>
			<td><?php echo $deal['comission']; ?></td>
			<td><?php echo $deal['image']; ?></td>
			<td><?php echo $deal['quantite']; ?></td>
			<td><?php echo $deal['ville_id']; ?></td>
			<td><?php echo $deal['etat']; ?></td>
			<td><?php echo $deal['created']; ?></td>
			<td><?php echo $deal['sous_category_id']; ?></td>
			<td><?php echo $deal['partenaire_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deals', 'action' => 'view', $deal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deals', 'action' => 'edit', $deal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deals', 'action' => 'delete', $deal['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deal['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
