<div class="partenaires view">
<h2><?php echo __('Partenaire'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexe'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['sexe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faxe'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['faxe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Altitude'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['altitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom De Societe'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['nom_de_societe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activite'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['activite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partenaire'), array('action' => 'edit', $partenaire['Partenaire']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partenaire'), array('action' => 'delete', $partenaire['Partenaire']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $partenaire['Partenaire']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Partenaires'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partenaire'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'deals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal'), array('controller' => 'deals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deals'); ?></h3>
	<?php if (!empty($partenaire['Deal'])): ?>
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
		<th><?php echo __('Sous Categorie Id'); ?></th>
		<th><?php echo __('Partenaire Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($partenaire['Deal'] as $deal): ?>
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
			<td><?php echo $deal['sous_categorie_id']; ?></td>
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
