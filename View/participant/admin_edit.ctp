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
                    <?php echo $this->Form->create('Client',array('type'=>'file')); ?>

                    <?php echo $this->Form->input('id'); ?>


                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label"><i class="fa fa-user" aria-hidden="true"></i>
                            Nom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('nom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'nom', 'name' => 'data[User][nom]', 'value' => $this->request->data['User']['nom'])); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="prenom" class="col-sm-2 col-form-label"><i class="fa fa-user"
                                                                               aria-hidden="true"></i> Prenom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('prenom', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'prenom', 'name' => 'data[User][prenom]', 'value' => $this->request->data['User']['prenom'])); ?>
                        </div>
                    </div>
                    <?php
                    echo $this->Form->input('role', array('label' => false, 'div' => false, 'type' => 'hidden', 'value' => '3'));
                    ?>
                    <div class="form-group row">
                        <label for="sexe"
                               class="col-sm-2 col-form-label"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            Sexe</label>
                        <div class="col-sm-6">
                            <?php
                            $options = array('1' => 'Homme', '2' => 'Femme');

                            echo $this->Form->input('sexe', array('legend' => false,
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
                        <label for="date_naissance"
                               class="col-sm-2 col-form-label"><i class="fa fa-calendar" aria-hidden="true"></i> Date de
                            naissance</label>
                        <div class="col-sm-6">
                            <?php

                            echo $this->Form->input('date_naissance', array('label' => false, 'div' => false, 'class' => 'form-control datepicker', 'placeholder' => 'champ obligatoire *', 'id' => 'datepicker', 'type' => 'text'));

                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image"
                               class="col-sm-2 col-form-label"><i class="fa fa-picture-o" aria-hidden="true"></i> Photo</label>
                        <div class="col-sm-6">

                            <?php
                            echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adresse"
                               class="col-sm-2 col-form-label"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Adresse</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('adresse', array('label' => false, 'div' => false, 'placeholder' => 'champ obligatoire *', 'class' => 'form-control', 'id' => 'adresse'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="code_postal"
                               class="col-sm-2 col-form-label"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Code postal</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('code_postal', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'champ obligatoire *', 'id' => 'code_postal'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telephone"
                               class="col-sm-2 col-form-label"><i class="fa fa-phone-square" aria-hidden="true"></i>
                            Telephone</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('telephone', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'champ obligatoire *', 'id' => 'telephone', 'pattern' => "[0-9]{8}", 'title' => '8 chiffres !!!'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label"><i class="fa fa-at"
                                                                                 aria-hidden="true"></i> Adresse
                            Email</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('username', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'email', 'name' => 'data[User][username]', 'type' => 'email', 'value' => $this->request->data['User']['username'])); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label"><i class="fa fa-unlock-alt"
                                                                                 aria-hidden="true"></i> Mot de
                            passe</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'password', 'name' => 'data[User][password]')); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label"><i class="fa fa-unlock-alt"
                                                                                 aria-hidden="true"></i> Vérification
                            mot de passe</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'password', 'name' => 'data[User][password]')); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Modifier
                    </button>
                    <?php echo $this->Form->end(); ?>


                </div>
            </div>
        </div>
    </div>
    </div>
</section>