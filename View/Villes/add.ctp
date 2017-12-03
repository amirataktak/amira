
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION VILLES</h1>
            <small>Ajouter</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Ville</a></li>
                <li class="active">Ajouter</li>
            </ol>
        </div>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Ajouter Ville </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Ville'); ?>

                    <div class="form-group row">
                    <label for="libelle"
                           class="col-sm-2 col-form-label">Libelle</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('libelle',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'libelle'));
	?>
                    </div>
                    </div>
                           <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Ajouter</button>
<?php echo $this->Form->end(); ?>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>