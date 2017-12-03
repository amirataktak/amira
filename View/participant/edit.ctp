
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION CLIENTS</h1>
            <small>Modifier</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Client</a></li>
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
                            <h4>Modifier Client </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Client'); ?>

	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
	?>
                    <div class="form-group row">
                    <label for="sexe"
                           class="col-sm-2 col-form-label">Sexe</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('sexe',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'sexe'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="adresse"
                           class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('adresse',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'adresse'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="code_postal"
                           class="col-sm-2 col-form-label">Code_postal</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('code_postal',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'code_postal'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="telephone"
                           class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="date_naissance"
                           class="col-sm-2 col-form-label">Date_naissance</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('date_naissance',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'date_naissance'));
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