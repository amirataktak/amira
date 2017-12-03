<div class="row">
    <div class="col-md-9">
        <h4><?php echo $deal['Deal']['titre']; ?></h4>
        <div class="fotorama">

            <?php
            echo $this->Html->image('/files/' . $deal['Deal']['image']);
            ?>
        </div>
        <div class="gap gap-small"></div>
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="index.htm#tab-1" data-toggle="tab"><i class="fa fa-tasks"
                                                                                  aria-hidden="true"></i> Détails de
                        Hackathon</a>
                </li>
                <li><a href="index.htm#tab" data-toggle="tab"><i class="fa fa-tag"></i>Conditions</a>
                </li>
                <li><a href="index.htm#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>Adresse</a>
                </li>
                <li><a href="index.htm#tab-3" data-toggle="tab"><i class="fa fa-comments"></i>Commentaires</a>
                </li>


            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <div class="row text-smaller">
                        <div class="col-md-12">

                            <h4>Description</h4>


                            <?php echo $deal['Deal']['description']; ?>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="tab">
                    <div class="row text-smaller">
                        <div class="col-md-12">

                            <h4>Condition</h4>


                            <?php echo $deal['Deal']['conditions']; ?>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="google-map-tab">
                    <div class="row">
                        <div class="col-md-9">
                            <iframe src="http://maps.google.com/maps?q=<?php echo $deal['Partenaire']['altitude']; ?>,<?php echo $deal['Partenaire']['longitude']; ?>&num=1&t=m&ie=UTF8&ll=<?php echo $deal['Partenaire']['altitude']; ?>,<?php echo $deal['Partenaire']['longitude']; ?>&spn=0.017837,0.021372&z=10&output=embed"
                                    height="400" width="100%" style="border:0;"></iframe>
                            <!--<div id="map" style="width:100%; height:300px;"></div>-->
                        </div>
                        <div class="col-md-3">
                            <ul class="list">
                                <li><?php echo $deal['Partenaire']['nom_de_societe']; ?></li>
                                <li><?php echo $deal['Partenaire']['adresse']; ?></li>
                                <li><?php echo $deal['Partenaire']['telephone']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                //debug($deal);
                ?>
                <div class="tab-pane fade" id="tab-3">
                    <!-- START COMMENTS -->
                    <ul class="comments-list">
                        <li>
                            <!-- COMMENT -->
                            <article class="comment">


                                <?php
                                $role = $this->Session->read('role');
                                if($role==3){
                                ?>
                                    <div class="comment-author">
                                        <img src="<?php echo $this->webroot.'files/'.$this->Session->read('image'); ?>" style="height:50px; width:50px;"/>
                                    </div>

                                <?php echo $this->Form->create('Commentaire', array('url' => array('controller' => 'commentaires', 'action' => 'add'))); ?>
                                <?php
                                echo $this->Form->input('deal_id', array('type' => 'hidden', 'div' => false, 'class' => 'form-control', 'id' => 'deal_id', 'value' => $deal['Deal']['id']));
                                ?>
                                <?php
                                echo $this->Form->input('user_id', array('type' => 'hidden', 'div' => false, 'class' => 'form-control', 'id' => 'user_id', 'value' => $this->Session->read('user_id')));
                                ?>

                                <div class="comment-inner">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <?php
                                            echo $this->Form->input('detail', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'detail', 'style' => 'height:40px; width:600px;'));
                                            ?>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-pencil"></i> Valider
                                                </button>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php echo $this->Form->end(); ?>
                                <?php } ?>

                            </article>
                        </li>

                        <?php foreach ($deal['Commentaire'] as $commentaire): ?>

                            <?php
                            $user = $this->requestAction('users/view/' . $commentaire['user_id']);
                            if ($user['User']['role'] == 2) {
                                $partenaire = $this->requestAction('partenaires/view/' . $commentaire['user_id']);
                            } elseif ($user['User']['role'] == 3) {
                                $client = $this->requestAction('clients/view/' . $commentaire['user_id']);
                            }
                            ?>


                            <li>
                                <article class="comment">
                                    <div class="comment-author">

                                        <?php
                                        if ($user['User']['role'] == 2) {
                                            if (!empty($partenaire['Partenaire']['image']))
                                                echo $this->Html->image('/files/' . $partenaire['Partenaire']['image'], array('style' => 'height:50px; width:50px;'));
                                        } elseif ($user['User']['role'] == 3) {
                                            if (!empty($client['Client']['image']))
                                                echo $this->Html->image('/files/' . $client['Client']['image'], array('style' => 'height:50px; width:50px;'));
                                        }
                                        ?>

                                    </div>
                                    <div class="comment-inner" style="width: 90%;">
                                        <span class="comment-author-name"><?php echo $user['User']['nom'] . " " . $user['User']['prenom']; ?></span>
                                        <p class="comment-content"><?php echo $commentaire['detail']; ?></p>
                                        <span class="comment-time"><?php echo $commentaire['created']; ?>
                                        </span>

                                        <?php
                                        if($user['User']['id']==$this->Session->read('user_id'))
                                        echo $this->Html->link(__('<i class="fa fa-times"></i>'), array('controller'=>'commentaires','action' => 'delete', $commentaire['id'],$deal['Deal']['id']),array('class'=>'comment-like','escape'=>false,'title'=>'Supprimer'));
                                        ?>


                                    </div>
                                </article>
                            </li>

                        <?php endforeach; ?>

                    </ul>
                    <!-- END COMMENTS -->

                </div>

            </div>
        </div>
        <div class="gap gap-small"></div>

    </div>
    <div class="col-md-3">
        <?php
        $nb_ach = 0;
        foreach ($deal['LigneCommande'] as $ligne):
            $nb_ach += $ligne['qte'];
        endforeach;
        ?>
        <div class="product-page-meta box">
            <h4><?php echo $deal['Deal']['titre']; ?></h4>
            <a class="btn btn-primary btn-lg btn-block" href="">
               <?php echo number_format($deal['Deal']['ancien_prix']-(($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100), 3, '.', ' '); ?> DT
            </a>
            <ul class="list product-page-meta-info">
                <li>
                    <span class="product-page-meta-title"><i class="fa fa-users"></i> Déja <?php echo $nb_ach; ?>
                        Partcipant(s) !</span>

                </li>
                <li><span class="product-page-meta-title">POUR participer IL VOUS RESTE</span>
                    <!-- COUNTDOWN -->
                    <div data-countdown="<?php echo $deal['Deal']['date_fin']; ?>"
                         class="countdown countdown-inline"></div>
                </li>

                <li>

                    <?php if ($this->Session->read('role') == 3) { ?>
                        <a style="cursor:pointer;" onclick="jaime('<?php echo count($deal['Deal']['id']); ?>');">
                    <span class="product-page-meta-title">
                        <i class="fa fa-thumbs-o-up"></i> <span
                                class="count_jaime"><?php echo count($deal['Jaime']); ?></span> J'aime(s)
                    </span>
                        </a>
                    <?php } else { ?>
                        <span class="product-page-meta-title">
                        <i class="fa fa-thumbs-o-up"></i> <?php echo count($deal['Jaime']); ?> J'aime(s)
                    </span>
                    <?php } ?>
                </li>
            </ul>
            <div class="gap gap-small"></div>


            <?php
            $user_id = $this->Session->read('user_id');
            $role = $this->Session->read('role');
            if(empty($user_id)){
                ?>
                <a class="popup-text btn btn-primary btn-lg btn-block" href="#login-dialog" data-effect="mfp-move-from-top">je participe</a>
            <?php } elseif($role==3) { ?>

                <a onclick="add_panier('<?php echo $deal['Deal']['id'];?>','1');" class="btn btn-primary btn-lg btn-block" href="javascript:;"> je participe</a>
            <?php } ?>





        </div>
    </div>
</div>


<script>
    function jaime(deal_id) {
        //alert(deal_id);

        $.ajax({
            url: '<?php echo $this->webroot;?>jaimes/add/',
            data: {deal_id: deal_id},
            type: 'post',
            dataType: 'json',
            success: function (res) {
                $('.count_jaime').html(res.count_jaime);
            }

        });

    }
</script>


<!--

<script>

    function initMap() {
        var myLatLng = {lat: <?php echo $deal['Partenaire']['altitude']; ?>, lng: <?php echo $deal['Partenaire']['longitude']; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: ''
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDipuEUi7_0s5zk_v7sC9FGIr0UmFXZ3do&libraries=places&callback=initMap"
        async defer></script>

-->