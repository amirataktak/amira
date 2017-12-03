
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION COMMENTAIRES</h1>
            <small>Modifier</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Commentaire</a></li>
                <li class="active">Modifier</li>
            </ol>
        </div>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Modifier Commentaire </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Commentaire'); ?>

	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
	?>
                    <div class="form-group row">
                    <label for="detail"
                           class="col-sm-2 col-form-label">Detail</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('detail',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'detail'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="deal_id"
                           class="col-sm-2 col-form-label">Deal_id</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('deal_id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'deal_id'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="client_id"
                           class="col-sm-2 col-form-label">Client_id</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('client_id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'client_id'));
	?>
                    </div>
                    </div>
                           <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Modifier</button>
<?php echo $this->Form->end(); ?>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>