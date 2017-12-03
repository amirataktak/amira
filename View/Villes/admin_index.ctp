
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>

        </div>
        <div class="header-title">
            <h1>GESTION DES VILLES</h1>
            <small>Liste</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">villes</a></li>
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
                            <h4>Liste des villes </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <!--<table id="dataTableExample2" class="table table-bordered table-striped table-hover">-->
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo ucfirst('Ville'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($villes as $ville): ?>
	<tr>
		<td><?php echo h($ville['Ville']['libelle']); ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $ville['Ville']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $ville['Ville']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $ville['Ville']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Etes-vous sûr que vous voulez supprimer # %s?', $ville['Ville']['id']))); ?>
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