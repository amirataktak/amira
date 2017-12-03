
<script>
    $( function() {
        $( "#datepicker" ).datepicker({ format: 'yyyy-mm-dd' });
    } );
</script>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Inscription Participant</h4>
                    </div>
                </div>
                <div class="panel-body">


                    <?php echo $this->Form->create('Client',array('type'=>'file')); ?>



                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label"><i class="fa fa-user" aria-hidden="true"></i> Nom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('nom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'nom','placeholder' => 'champ obligatoire *','name' => 'data[User][nom]','pattern'=>'[A-Za-z]*')); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="prenom" class="col-sm-2 col-form-label"><i class="fa fa-user" aria-hidden="true"></i> Prenom </label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('prenom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'prenom','placeholder' => 'champ obligatoire *', 'name' => 'data[User][prenom]','pattern'=>'[A-Za-z]*')); ?>
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label"><i class="fa fa-at" aria-hidden="true"></i>  Adresse Email</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('username', array('label' => false, 'div' => false, 'class' => 'form-control','placeholder' => 'champ obligatoire *', 'id'=>'username','name' => 'data[User][username]', 'type' => 'email')); ?>
                        </div>
                    </div>
					 <div class="form-group row">
                        <label for="telephone"
                               class="col-sm-2 col-form-label"><i class="fa fa-phone-square" aria-hidden="true"></i> Telephone</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('telephone', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'champ obligatoire *','id' => 'telephone','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sexe"
                               class="col-sm-2 col-form-label"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Sexe</label>
                        <div class="col-sm-6"  >
                            <div class="radio">
                                <label>
                                    <input checked value="1" type="radio" class="i-radio" name="data[Client][sexe]" />Homme</label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input value="2" type="radio" class="i-radio" name="data[Client][sexe]" />Femme</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_naissance"
                               class="col-sm-2 col-form-label"><i class="fa fa-calendar" aria-hidden="true"></i> Date de naissance</label>
                        <div class="col-sm-6">
                            <?php

                            echo $this->Form->input('date_naissance', array('label' => false, 'div' => false, 'class' => 'form-control datepicker','placeholder' => 'champ obligatoire *', 'id' => 'datepicker', 'type' => 'text','required'));

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image"
                               class="col-sm-2 col-form-label"><i class="fa fa-picture-o" aria-hidden="true"></i> Photo</label>
                        <div class="col-sm-6">

                            <?php
                            echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file','required'=>false));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adresse"
                               class="col-sm-2 col-form-label"><i class="fa fa-map-marker" aria-hidden="true"></i> Adresse</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('adresse', array('label' => false, 'div' => false, 'placeholder' => 'champ obligatoire *','class' => 'form-control', 'id' => 'adresse','required'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="code_postal"
                               class="col-sm-2 col-form-label"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Code postal</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('code_postal', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'champ obligatoire *','id' => 'code_postal'));
                            ?>
                        </div>
                    </div>
                   

                    

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mot de passe</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control','placeholder' => 'champ obligatoire *', 'id' => 'password', 'name' => 'data[User][password]','pattern'=>"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")); ?>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="checkbox-inline" style="float:left;">

                                <input type="checkbox" name="conditions" required="" value="1">
                                J'accepte <span style="color: #1f83e2; text-decoration: underline;">les Conditions générales de commercialisation.</span>
                            </label>
                        </div>

                    </div>
                    <div class="gap gap-small"></div> <div class="gap gap-small"></div>
                    <?php
                    echo $this->Form->input('role', array('label' => false, 'div' => false, 'type' => 'hidden','value'=>'3','name' => 'data[User][role]'));
                    ?>

                    <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2, name="valider">S'inscrire
                    </button>
                    <button type="reset" class="btn btn-primary btn-rounded w-md m-b-0 col-md-offset-0">Annuler
                    </button>




                    <?php echo $this->Form->end(); ?>


                </br>
            </div>
        </div>
    </div>
    </div>
