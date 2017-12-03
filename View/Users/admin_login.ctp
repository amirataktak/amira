
<div class="panel-body">
                        <?php echo $this->Form->create('User'); ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Adresse E-mail</label>
                                <?php echo $this->Form->input('username',array('label'=>false,'div'=>false,'placeholder'=>'example@gmail.com','class'=>'form-control')); ?>
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">Mot de Passe</label>
                                <?php echo $this->Form->input('password',array('label'=>false,'div'=>false,'placeholder'=>'Entrez votre mot de passe','class'=>'form-control')); ?>
                                
                            </div>
    <div class="form-actions"> <button type="submit" class="submit btn btn-primary pull-right"> Connexion <i class="glyphicon glyphicon-angle-right" aria-hidden="true"></i> </button> </div>
                       <?php echo $this->Form->end(); ?>
                    </div>
