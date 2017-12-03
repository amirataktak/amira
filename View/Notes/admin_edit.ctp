
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        <div class="header-title">
            <h1>GESTION NOTES</h1>
            <small>Modifier</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Accueil</a></li>
                <li><a href="#">Note</a></li>
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
                            <h4>Modifier Note </h4>
                        </div>
                    </div>
                    <div class="panel-body">



<?php echo $this->Form->create('Note'); ?>

	<?php
		echo $this->Form->input('id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'id'));
	?>
                    <div class="form-group row">
                    <label for="evaluation"
                           class="col-sm-2 col-form-label">Evaluation</label>
                    <div class="col-sm-6">
                    	<?php
		echo $this->Form->input('evaluation',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'evaluation'));
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