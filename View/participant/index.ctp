
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION CLIENTS</h1>
            <small>Liste</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">clients</a></li>
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
                            <h4>Liste des clients </h4>
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
			<th><?php echo ucfirst('adresse'); ?></th>
			<th><?php echo ucfirst('code_postal'); ?></th>
			<th><?php echo ucfirst('telephone'); ?></th>
			<th><?php echo ucfirst('date_naissance'); ?></th>
			<th><?php echo ucfirst('created'); ?></th>
			<th><?php echo ucfirst('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['sexe']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['code_postal']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['date_naissance']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $client['Client']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $client['Client']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $client['Client']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Etes-vous sûr que vous voulez supprimer # %s?', $client['Client']['id']))); ?>
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