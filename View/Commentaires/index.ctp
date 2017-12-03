
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION COMMENTAIRES</h1>
            <small>Liste</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">commentaires</a></li>
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
                            <h4>Liste des commentaires </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <!--<table id="dataTableExample2" class="table table-bordered table-striped table-hover">-->
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo ucfirst('id'); ?></th>
			<th><?php echo ucfirst('detail'); ?></th>
			<th><?php echo ucfirst('deal_id'); ?></th>
			<th><?php echo ucfirst('created'); ?></th>
			<th><?php echo ucfirst('client_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($commentaires as $commentaire): ?>
	<tr>
		<td><?php echo h($commentaire['Commentaire']['id']); ?>&nbsp;</td>
		<td><?php echo h($commentaire['Commentaire']['detail']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentaire['Deal']['id'], array('controller' => 'deals', 'action' => 'view', $commentaire['Deal']['id'])); ?>
		</td>
		<td><?php echo h($commentaire['Commentaire']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentaire['Client']['id'], array('controller' => 'clients', 'action' => 'view', $commentaire['Client']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>'), array('action' => 'view', $commentaire['Commentaire']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail')); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $commentaire['Commentaire']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $commentaire['Commentaire']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Etes-vous sûr que vous voulez supprimer # %s?', $commentaire['Commentaire']['id']))); ?>
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