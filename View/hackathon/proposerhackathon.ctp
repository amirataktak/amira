
<script>
    $( function() {
        $( "#datepicker" ).datepicker({ format: 'yyyy-mm-dd' });
    } );
</script>

<script>
    $(function () {
        $("#datepicker1").datepicker();
    });
</script>
<section class="content-header">
    <div class="header-icon">

</section>


<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Proposer Deal </h4>
                    </div>
                </div>
                <div class="panel-body">


                    <?php echo $this->Form->create('Deal', array('type' => 'file')); ?>

                    <div class="form-group row">
                        <label for="titre"
                               class="col-sm-2 col-form-label">Titre</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('titre', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'titre'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description"
                               class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('description', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'description'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_deb"
                               class="col-sm-2 col-form-label">Date de debut</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('date_deb', array('label' => false, 'div' => false, 'class' => 'form-control datepicker', 'id' => 'datepicker', 'type' => 'date'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_fin"
                               class="col-sm-2 col-form-label">Date de fin</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('date_fin', array('label' => false, 'div' => false, 'class' => 'form-control datepicker', 'id' => 'datepicker1', 'type' => 'date'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ancien_prix"
                               class="col-sm-2 col-form-label">Ancien prix</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('ancien_prix', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'ancien_prix'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="conditions"
                               class="col-sm-2 col-form-label">Conditions</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('conditions', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'conditions'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="remise"
                               class="col-sm-2 col-form-label">Remise(%)</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('remise', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'remise'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comission"
                               class="col-sm-2 col-form-label">Comission (%)</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('comission', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'comission'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image"
                               class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('image', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'image', 'type' => 'file','required'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantite"
                               class="col-sm-2 col-form-label">Quantite</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('quantite', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'quantite','required'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ville_id"
                               class="col-sm-2 col-form-label">Ville</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('ville_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'ville_id', 'empty' => '--- Choix ville ---'));
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sous_categorie_id"
                               class="col-sm-2 col-form-label">Sous categorie</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('sous_categorie_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'sous_categorie_id', 'empty' => '--- Choix une sous categorie ---'));
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="partenaire_id"
                               class="col-sm-2 col-form-label">Partenaire</label>
                        <div class="col-sm-6">
                            <?php
                            echo $this->Form->input('partenaire_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'partenaire_id'));
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-rounded w-md m-b-5 col-md-offset-2">Ajouter
                    </button>
                    <?php echo $this->Form->end(); ?>


                </div>
            </div>
        </div>
    </div>
    </div>
</section>