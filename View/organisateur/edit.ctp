
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>GESTION PARTENAIRES</h1>
            <small>Modifier</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Partenaire</a></li>
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
                            <h4>Modifier Partenaire </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Partenaire'); ?>

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
                    <label for="telephone"
                           class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="faxe"
                           class="col-sm-2 col-form-label">Faxe</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('faxe',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'faxe'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="longitude"
                           class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('longitude',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'longitude'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="altitude"
                           class="col-sm-2 col-form-label">Altitude</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('altitude',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'altitude'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="nom_de_societe"
                           class="col-sm-2 col-form-label">Nom_de_societe</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('nom_de_societe',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom_de_societe'));
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
                    <label for="activite"
                           class="col-sm-2 col-form-label">Activite</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('activite',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'activite'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="image"
                           class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('image',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'image'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="facebook"
                           class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('facebook',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'facebook'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="etat"
                           class="col-sm-2 col-form-label">Etat</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('etat',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'etat'));
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