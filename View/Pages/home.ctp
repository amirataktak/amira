<?php
$deals = $this->requestAction('deals/index/')
?>
<div class="col-md-3">

</div>
<div class="col-md-9">

    <div class="row row-wrap">

        <?php foreach ($deals as $deal): ?>

            <div class="col-md-4">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="<?php echo $this->webroot; ?>files/<?php echo $deal['Deal']['image']; ?>"
                             style="height: 180px;"/>
                        <div class="product-quick-view">
                            <a class="fa fa-eye" href="<?php echo $this->webroot; ?>deals/detail/<?php echo $deal['Deal']['id']; ?>"                               data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top"
                               title="Quick View"></a>
                        </div>
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="3/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <h5 class="product-title"><?php echo $deal['Deal']['titre']; ?></h5>

                        <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $deal['Ville']['libelle'] ?>
                        <div class="product-meta">

                            <ul class="product-price-list">
                                <li><span class="product-price"><?php echo number_format(($deal['Deal']['ancien_prix']-($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100), 3, '.', ' '); ?>  DT</span>
                                
                                
                            </ul>
                            <ul class="product-actions-list">
                                <li>
                                    <?php
                                    $user_id = $this->Session->read('user_id');
                                    $role = $this->Session->read('role');
                                    if(empty($user_id)){
                                    ?>
                                    <a class="popup-text btn btn-sm" href="#login-dialog" data-effect="mfp-move-from-top">Je participe</a>
                                    <?php } elseif($role==3) { ?>

                                    <a onclick="add_panier('<?php echo $deal['Deal']['id'];?>','1');" class="btn btn-sm" href="javascript:;"> Je participe</a>
                                    <?php } ?>

                                </li>
                                <li>
                                    <?php
                                    echo $this->Html->link('<i class="fa fa-bars"></i> Details',array('controller'=>'deals','action'=>'detail',$deal['Deal']['id']),array('class'=>'btn btn-sm','escape'=>false));
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>

    <div class="gap gap-small"></div>
</div>