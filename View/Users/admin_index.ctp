<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-user"></i>
    </div>
    <div class="header-title">
        <h1>GESTION DES UTILISATEURS</h1>
        <small>Liste</small>
        <ol class="breadcrumb">
            <li><a href="<?php  echo $this->webroot; ?>"><i class="pe-7s-home"></i> Accueil</a></li>
            <li><a href="#">Utilisateur</a></li>
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
                    <h4>Liste des utilisateurs </h4>
                </div>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <!--<table id="dataTableExample2" class="table table-bordered table-striped table-hover">-->
                    <table class="table table-bordered table-striped table-hover">

                    <thead>
       	<tr>

			<th><?php echo ucfirst('username'); ?></th>

            <th><?php echo ucfirst('role'); ?></th>
			<th><?php echo ucfirst('created'); ?></th>
			<th><?php echo ucfirst('modified'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>

        <td> <?php if($user['User']['role']==1) echo "Administrateur"; elseif($user['User']['role']==2) echo "Partenaire"; elseif($user['User']['role']==3) echo "client"; ?>&nbsp;&nbsp;</td>

		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>

		<td class="actions">
            <?php if($user['User']['role']==3) echo $this->Html->link(__('<i class="fa fa-eye"></i>'),array('controller'=>'clients','action'=>'admin_index',$user['User']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail','target'=>'_blank')); elseif($user['User']['role']==2)  echo $this->Html->link(__('<i class="fa fa-eye"></i>'),array('controller'=>'partenaires','action'=>'admin_index',$user['User']['id']),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail','target'=>'_blank'));elseif($user['User']['role']==2)  echo $this->Html->link(__('<i class="fa fa-eye"></i>'),array($user['User']['id'],'controller'=>'partenaires','action'=>'admin_index'),array('class'=>'btn btn-success btn-circle m-b-5','escape'=>false,'title'=>'Detail','target'=>'_blank')); ?>


			<?php if($user['User']['role']==1) echo $this->Html->link(__('<i class="fa fa-pencil-square-o"></i>'), array('action' => 'edit', $user['User']['id']),array('class'=>'btn btn-primary btn-circle m-b-5','escape'=>false,'title'=>'Modifier')); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-danger btn-circle m-b-5','escape'=>false,'title'=>'Supprimer','confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


