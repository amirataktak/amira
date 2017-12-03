<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-user"></i>
    </div>
    <div class="header-title">
        <h1>GESTION DES UTILISATEURS</h1>
        <small>Ajouter</small>
        <ol class="breadcrumb">
            <li><a href="<?php  echo $this->webroot; ?>"><i class="pe-7s-home"></i> Accueil</a></li>
            <li><a href="#">Utilisateur</a></li>
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
                        <h4>Ajouter utilisateur </h4>
                    </div>
                </div>
                <div class="panel-body">

<?php echo $this->Form->create('User'); ?>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'username','type'=>'email')); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'password','pattern'=>"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','pattern'=>'[A-Za-z]*')); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','pattern'=>'[A-Za-z]*')); ?>
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

