


    <?php echo $this->Form->create('Deal',array('class'=>'search-area form-group search-area-white','url'=>array('controller'=>'deals','action'=>'index',1))); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7 clearfix">
                <label><i class="fa fa-search"></i><span></span>
                </label>
                <div class="search-area-division search-area-division-input">

                    <?php
                    echo $this->Form->input('recherche',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'recherche','placeholder'=>'Que cherchez-vous?'));
                    ?>

                </div>
            </div>
            <div class="col-md-3 clearfix">
                <label><i class="fa fa-map-marker"></i><span>à</span>
                </label>
                <div class="search-area-division search-area-division-location">

                    <?php
                    $villes = $this->requestAction('villes/index');

                    echo $this->Form->input('ville_id',array('label'=>false,'div'=>false,'class'=>'form-control','id'=>'recherche','options'=>$villes,'empty'=>'Toutes les régions'));
                    ?>

                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-block btn-white search-btn" type="submit">Recherche</button>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>