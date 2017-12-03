
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>

        </div>
        <div class="header-title">
            <h1>GESTION DES VILLES</h1>
            <small>Modifier</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Ville</a></li>
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
                            <h4>Modifier Ville </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Ville'); ?>

	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id','pattern'=>'[A-Za-z]*'));
	?>
                    <div class="form-group row">
                    <label for="libelle"
                           class="col-sm-2 col-form-label">Ville</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('libelle',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'libelle'));
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