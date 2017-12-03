
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-id-card" aria-hidden="true"></i>
        </div>
        <div class="header-title">
            <h1>GESTION DES  CLIENTS</h1>
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
            <th><?php echo ucfirst('nom'); ?></th>
            <th><?php echo ucfirst('prenom'); ?></th>
			<th><?php echo ucfirst('image'); ?></th>
			<th><?php echo ucfirst('adresse'); ?></th>
			<th><?php echo ucfirst('code postal'); ?></th>
			<th><?php echo ucfirst('telephone'); ?></th>
			<th><?php echo ucfirst('date de naissance'); ?></th>
			<th><?php echo ucfirst('created'); ?></th>
			<th><?php echo ucfirst('modified'); ?></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
        <td><?php if($client['User']['role']==3) echo h($client['User']['nom']); ?>&nbsp;</td>
        <td><?php if($client['User']['role']==3) echo h($client['User']['prenom']); ?>&nbsp;</td>
        <td><?php if(!empty($client['Client']['image'])) echo $this->Html->image('/files/'.$client['Client']['image'],array('height'=>'50')); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3) echo h($client['Client']['adresse']); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3)  echo h($client['Client']['code_postal']); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3) echo h($client['Client']['telephone']); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3) echo h($client['Client']['date_naissance']); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3) echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php if($client['User']['role']==3) echo h($client['Client']['modified']); ?>&nbsp;</td>

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