
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION PARTENAIRES</h1>
            <small>Liste</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">partenaires</a></li>
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
                            <h4>Liste des partenaires </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <!--<table id="dataTableExample2" class="table table-bordered table-striped table-hover">-->
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo ucfirst('id'); ?></th>
			<th><?php echo ucfirst('sexe'); ?></th>
			<th><?php echo ucfirst('telephone'); ?></th>
			<th><?php echo ucfirst('faxe'); ?></th>
			<th><?php echo ucfirst('longitude'); ?></th>
			<th><?php echo ucfirst('altitude'); ?></th>
			<th><?php echo ucfirst('nom_de_societe'); ?></th>
			<th><?php echo ucfirst('adresse'); ?></th>
			<th><?php echo ucfirst('activite'); ?></th>
			<th><?php echo ucfirst('image'); ?></th>
			<th><?php echo ucfirst('facebook'); ?></th>
			<th><?php echo ucfirst('etat'); ?></th>
			<th><?php echo ucfirst('created'); ?></th>
			<th><?php echo ucfirst('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($partenaires as $partenaire): ?>
	<tr>
		<td><?php echo h($partenaire['Partenaire']['id']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['sexe']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['faxe']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['altitude']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['nom_de_societe']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['activite']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['image']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['etat']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['created']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $partenaire['Partenaire']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $partenaire['Partenaire']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $partenaire['Partenaire']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Etes-vous sûr que vous voulez supprimer # %s?', $partenaire['Partenaire']['id']))); ?>
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