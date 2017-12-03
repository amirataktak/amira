<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>
    <h3>Déja Inscrit</h3>
    <h5>Bienvenue,Connectez-vous pour commencer!</h5>
    <?php echo $this->Form->create('User',array('class'=>'dialog-form','url'=>array('controller'=>'users','action'=>'login'))); ?>

        <div class="form-group">
            <label class="control-label" for="username"><i class="fa fa-at" aria-hidden="true"></i> Adresse E-mail </label>
            <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'placeholder'=>'email@domain.com','class'=>'form-control','id'=>'username','type'=>'email')); ?>
        </div>
        <div class="form-group">
            <label class="control-label" for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Mot de Passe</label>

            <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'placeholder'=>'Entrez votre mot de passe secret','class'=>'form-control','id'=>'password')); ?>
        </div>

        <input type="submit" value="Se connecter" class="btn btn-primary">
    <a class="btn btn-primary" href="<?php echo $this->webroot;?>clients/inscription">S'inscrire</a>

    <?php echo $this->Form->end(); ?>
</div>