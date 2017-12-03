
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">

        <!-- Trigger the modal with a button -->


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">

            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Inscription membre</h4>
                        <h5>Prêt à obtenir les meilleures offres? Commençons!</h5>
                    </div>
                    <div class="modal-body">
                        <?php echo $this->Form->create('Client'); ?>

                        <div class="form-group ">
                            <label for="username" class="control-label">Email</label>
                            <div class="">
                                <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'placeholder'=>'Tapez votre email','class'=>'form-control','id'=>'username','name'=>'data[User][username]')); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">Mot de passe</label>

                            <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'placeholder'=>'Tapez votre mot de passe','class'=>'form-control','id'=>'password','name'=>'data[User][password]')); ?>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Répéter le mot de passe</label>

                            <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'placeholder'=>'Tapez votre mot de passe à nouveau','class'=>'form-control','id'=>'password','name'=>'data[User][password]')); ?>
                        </div>

                        <div class="form-group">
                            <label for="nom" class="control-label">Nom</label>
                            <div class="">
                                <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','name'=>'data[User][nom]')); ?>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="prenom" class="control-label">Prenom</label>
                            <div class="">
                                <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','name'=>'data[User][prenom]')); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sexe"
                                   class="control-label">Sexe</label>
                            <div class="">
                                <?php
                                $options=array('1'=>'Homme','2'=>'Femme');

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




                        <div class="form-group">
                            <label for="adresse"
                                   class="control-label">Adresse</label>
                            <div class="">
                                <?php
                                echo $this->Form->input('adresse',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'adresse'));
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="code_postal"
                                   class="control-label">Code postal</label>
                            <div class="">
                                <?php
                                echo $this->Form->input('code_postal',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'code_postal'));
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone"
                                   class="control-label">Telephone</label>
                            <div class="">
                                <?php
                                echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone'));
                                ?>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="date_naissance"
                                   class="control-label">Date de naissance</label>
                            <div class="">
                                <?php

                                echo $this->Form->input('date_naissance', array('label' => false, 'div' => false, 'class' => 'form-control datepicker', 'id' => 'date_naissance','type'=>'texte'));

                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">J'accepte les Conditions générales de commercialisation
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">S'inscrire</button>
                        <button class="btn btn-primary"  type="reset">
                            Annuler
                        </button>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>
