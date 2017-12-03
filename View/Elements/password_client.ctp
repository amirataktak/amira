<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>
    <h3>Récupération de mot de passe</h3>
    <h5>Mot de passe oublié? Ne vous inquiétez pas, nous pouvons nous en récupérer</h5>
    <form class="dialog-form">
        <label class="control-label" for="username">E-mail</label>

        <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'placeholder'=>'email@domain.com','class'=>'span12')); ?>
        <input type="submit" value="Demander un nouveau mot de passe" class="btn btn-primary">
    </form>
</div>