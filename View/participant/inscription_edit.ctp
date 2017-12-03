
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-id-card" aria-hidden="true"></i>
        </div>
        <div class="header-title">
            <h1>GESTION DES CLIENTS</h1>
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
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Login</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'username','name'=>'data[User][username]', 'type' => 'email')); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'password','name'=>'data[User][password]')); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','name'=>'data[User][nom]')); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','name'=>'data[User][prenom]')); ?>
                            </div>
                        </div>
	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
	?>
                        <div class="form-group row">
                            <label for="sexe"
                                   class="col-sm-2 col-form-label">Sexe</label>
                            <div class="col-sm-6">
                                <?php
                                $options=array('H'=>'Homme','F'=>'Femme');

                                echo $this->Form->input('sexe', array('legend'=>false,
                                    'before' => '<div class="radio radio-info radio-inline">',
                                    'after' => '</div>',
                                    'between' => '',
                                    'separator' => '</div><div class="radio radio-info radio-inline">',
                                    'options' => $options,
                                    'type' => 'radio'
                                ));
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
                           class="col-sm-2 col-form-label">Code postal</label>
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
                           class="col-sm-2 col-form-label">Date de naissance</label>
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