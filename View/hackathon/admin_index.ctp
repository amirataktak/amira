
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </div>
        <div class="header-title">
            <h1>GESTION DEALS</h1>
            <small>Liste</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">deals</a></li>
                <li class="active">Liste</li>
            </ol>
        </div>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Liste des deals

                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <!--<table id="dataTableExample2" class="table table-bordered table-striped table-hover">-->
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo ucfirst('titre'); ?></th>

			<th><?php echo ucfirst('date de debut'); ?></th>
			<th><?php echo ucfirst('date de fin'); ?></th>
			<th><?php echo ucfirst('nouveau prix'); ?></th>

			<th><?php echo ucfirst('image'); ?></th>
			<th><?php echo ucfirst('quantite'); ?></th>
			<th><?php echo ucfirst('ville'); ?></th>
			<th><?php echo ucfirst('etat'); ?></th>
			<th><?php echo ucfirst('partenaire'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($deals as $deal): ?>

	<tr>
		<td><?php echo h($deal['Deal']['titre']); ?>&nbsp;</td>

		<td><?php echo h($deal['Deal']['date_deb']); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['date_fin']); ?>&nbsp;</td>

        <td><?php echo number_format($deal['Deal']['ancien_prix']-(($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100), 3, '.', ' '); ?> DT</td>

        <td><?php if(!empty($deal['Deal']['image'])) echo $this->Html->image('/files/'.$deal['Deal']['image'],array('height'=>'50')); ?>&nbsp;</td>
		<td><?php echo h($deal['Deal']['quantite']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deal['Ville']['libelle'], array('controller' => 'villes', 'action' => 'view', $deal['Ville']['id'])); ?>
		</td>
		<td><?php if($deal['Deal']['etat']==1) echo "Acceptée"; elseif($deal['Deal']['etat']==0) echo "En attente"; elseif($deal['Deal']['etat']==3) echo "Refusée"; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deal['Partenaire']['nom_de_societe'], array('controller' => 'partenaires', 'action' => 'view', $deal['Partenaire']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('admin'=>false,'action' => 'detail', $deal['Deal']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail','target'=>'_blank')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $deal['Deal']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $deal['Deal']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Etes-vous sûr que vous voulez supprimer # %s?', $deal['Deal']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    </table>
</div>
</div>
</div>
</div>
</div>
</section>