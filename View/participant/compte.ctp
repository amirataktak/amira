
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

<div class="container">
<div class="row">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li class="active"> <a href="<?php echo $this->webroot ?>clients/compte"><i class="fa fa-user" aria-hidden="true"></i>    Mon    compte</a>
                </li>



            </ul>
        </aside>
    </div>
    <div class="gap gap-small"></div>
    <?php
    //debug($this->request->data);
    ?>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd lobidrag">

                <?php echo $this->Form->create('Client'); ?>
                <?php echo $this->Form->input('id'); ?>
                <?php echo $this->Form->input('id',array('name'=>'data[User][id]')); ?>

                <div class="form-group row">
                    <div class="gap gap-small"></div>
                    <label for="username" class="col-sm-3 col-form-label"><i class="fa fa-at" aria-hidden="true"></i>   Adresse E-mail</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'email','name'=>'data[User][username]','type'=>'email','value'=>$this->request->data['User']['username'])); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i>   Mot de passe</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'password','name'=>'data[User][password]','pattern'=>"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}")); ?>
                    </div>
                </div>

                    <?php
                    echo $this->Form->input('role', array('label' => false, 'div' => false, 'type' => 'hidden','value'=>'3'));
                    ?>
                <div class="form-group row">
                    <label for="nom" class="col-sm-3 col-form-label"><i class="fa fa-user" aria-hidden="true"></i>  Nom</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('nom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'nom','name'=>'data[User][nom]','value'=>$this->request->data['User']['nom'],'pattern'=>'[A-Za-z]*')); ?>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="prenom" class="col-sm-3 col-form-label"><i class="fa fa-user" aria-hidden="true"></i>  Prenom</label>
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('prenom',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'prenom','name'=>'data[User][prenom]','value'=>$this->request->data['User']['prenom'],'pattern'=>'[A-Za-z]*')); ?>
                    </div>
                </div>
                <?php
                echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
                ?>


                <div class="form-group row">
                    <label for="sexe"
                           class="col-sm-3 col-form-label"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>   Sexe</label>
                    <div class="col-sm-6"  >
                        <div class="radio">
                            <label>
                                <input <?php if($this->request->data['Client']['sexe']==1) echo 'checked'; ?> value="1" type="radio" class="i-radio" name="data[Client][sexe]" />Homme</label>
                        </div>

                        <div class="radio">
                            <label>
                                <input <?php if($this->request->data['Client']['sexe']==2) echo 'checked'; ?> value="2" type="radio" class="i-radio" name="data[Client][sexe]" />Femme</label>
                        </div>

                    </div>
                </div>
                    <div class="form-group row">
                        <label for="image"
                               class="col-sm-3 col-form-label"><i class="fa fa-picture-o" aria-hidden="true"></i>    Photo</label>
                        <div class="col-sm-6">

                            <?php
                            echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file','required'));
                            ?>
                        </div>
                    </div>

                <div class="form-group row">
                    <label for="adresse"
                           class="col-sm-3 col-form-label">  <i class="fa fa-map-marker" aria-hidden="true"></i>      Adresse</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('adresse',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'adresse'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code_postal"
                           class="col-sm-3 col-form-label"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>   Code postal</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('code_postal',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'code_postal'));
                        ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telephone" class="col-sm-3 col-form-label"><i class="fa fa-phone-square" aria-hidden="true"></i>  Telephone</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('telephone',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'telephone','pattern'=>"[0-9]{8}",'title'=>'8 chiffres !!!'));
                        ?>
                </div></div>
                <div class="form-group row">
                    <label for="date_naissance" class="col-sm-3 col-form-label"><i class="fa fa-calendar" aria-hidden="true"></i>  Date de naissance</label>
                    <div class="col-sm-6">
                        <?php
                        echo $this->Form->input('date_naissance', array('label' => false, 'div' => false, 'class' => 'form-control datepicker','placeholder' => 'champ obligatoire *', 'id' => 'datepicker', 'type' => 'text','required'));
                        ?>
                </div> </div>
                <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2"><i class="fa fa-user" aria-hidden="true"></i>  Modifier profil utilisateur</button>


                <?php echo $this->Form->end(); ?>
            </div>
        </div>
        <div class="gap"></div>
    </div>
</div></div>
</div>