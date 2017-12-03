
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-id-card-o" aria-hidden="true"></i>
        </div>
        <div class="header-title">
            <h1>GESTION DES PARTENAIRES</h1>
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


                        <?php echo $this->Form->create('Partenaire',array('type'=>'file')); ?>

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Login</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'username','name'=>'data[User][username]','readonly')); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'password','name'=>'data[User][password]','readonly')); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','name'=>'data[User][nom]','readonly')); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-6">
                                <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','name'=>'data[User][prenom]','readonly')); ?>
                            </div>
                        </div>
	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id','readonly'));
	?>
                        <div class="form-group row">
                            <label for="sexe"
                                   class="col-sm-2 col-form-label">Sexe</label>
                            <div class="col-sm-6">
                                <?php
                                $options=array('1'=>'Homme','2'=>'Femme');

                                echo $this->Form->input('sexe', array('legend'=>false,'disabled',
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
                    <label for="telephone"
                           class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone','readonly'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="faxe"
                           class="col-sm-2 col-form-label">Faxe</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('faxe',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'faxe','readonly'));
	?>
                    </div>
                    </div>

                                        <div class="form-group row">
                    <label for="nom_de_societe"
                           class="col-sm-2 col-form-label">Nom des ociete</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('nom_de_societe',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom_de_societe','readonly'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="adresse"
                           class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('adresse',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'adresse','readonly'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="activite"
                           class="col-sm-2 col-form-label">Activite</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('activite',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'activite','readonly'));
	?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="image"
                           class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-6">
                      <?php
                        echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file','readonly'));

                        ?>
                    </div>
                    </div>
                                        <div class="form-group row">
                    <label for="facebook"
                           class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('facebook',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'facebook','readonly'));
	?>
                    </div>
                    </div>

                        <div class="form-group row">
                            <label for="etat"
                                   class="col-sm-2 col-form-label">Etat</label>
                            <div class="col-sm-6">
                                <?php
                                $options=array('1'=>'Vlidée','2'=>'Non validée');

                                echo $this->Form->input('etat', array('legend'=>false,
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

                           <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Modifier</button>
<?php echo $this->Form->end(); ?>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>