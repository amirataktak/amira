<div class="row">

    <?php
    $panier = $this->Session->read('panier');
    $total_achat = 0;
    if(count($panier)>0){
        ?>
        <div class="col-md-12">
            <table class="table cart-table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Description	</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Total</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($panier as $deal):
                    $total = ($deal['Deal']['ancien_prix']-($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100)* $deal['qte'];
                    $total_achat+=$total;
                    ?>

                    <tr>
                        <td>
                            <a href="<?php echo $this->webroot;?>deals/detail/<?php echo $deal['Deal']['id']; ?>">
                                <img src="<?php echo $this->webroot; ?>files/<?php echo $deal['Deal']['image']; ?>"
                                     title="<?php echo $deal['Deal']['titre']; ?>" class="img-responsive" style="height: 70px;width: 120px;"/>
                            </a>
                        </td>
                        <td >
                            <a href="<?php echo $this->webroot;?>deals/detail/<?php echo $deal['Deal']['id']; ?>">
                                <?php echo $deal['Deal']['titre']; ?>
                            </a>
                        </td>

                        <td class="cart-item-quantity">
                            <i class="fa fa-minus cart-item-minus" onclick="cart_minus('<?php echo $deal['Deal']['id']; ?>')"></i>
                            <input id="qte" type="text" name="cart-quantity" class="cart-quantity" value="<?php echo $deal['qte']; ?>" />
                            <i class="fa fa-plus cart-item-plus" onclick="cart_plus('<?php echo $deal['Deal']['id']; ?>')"></i>
                        </td>
                        <td><?php echo  $deal['Deal']['ancien_prix']-(($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100); ?></td>
                        <td><?php echo number_format($total, 3, '.', ' '); ?> DT</td>

                        <td class="cart-item-remove">
                            <a class="fa fa-times" href="javascript:;" onclick="supprimer_panier('<?php echo $deal['Deal']['id']; ?>')"></a>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th colspan="6" align="center"><center><b>MONTANT GLOBAL:</b> <?php echo number_format($total_achat, 3, '.', ' '); ?> DT</center></th>
                </tr>
                </tfoot>
            </table>

            <a href="<?php echo $this->webroot;?>deals/index/1" class="btn btn-primary">Continuer vos achat</a>
            <a href="javascript:;" onclick="vider_panier();" class="btn btn-primary">Vider le panier</a>
        </div>
    <?php } else { ?>

        <div class="alert alert-danger" role="alert" style="text-align:center">&nbsp;&nbsp;Votre Panier est vide  </div>

    <?php } ?>

</div>



<div class="col-sm-12"><h4>Mode de paiement</h4></div>

<div class="col-sm-12" style="color:#333333">
    <div class="col-sm-6"><span><input type="radio" name="payement" value="1" required="" checked> Paiement en espèce ou par chèque <img src="<?php echo $this->webroot; ?>img/pay_esp_cheq.png" style="width: 110px;"></span></div>

    <div class="col-sm-6"><span><input type="radio" name="payement" value="2" disabled> Paiement en ligne <img src="<?php echo $this->webroot; ?>img/pay_ligne.png" style="width: 150px;"></span></div>
    <br>
    <br>
</div>

<?php echo $this->Form->create('Commande',array('url'=>array('controller'=>'commandes','action'=>'valider'))); ?>

<div class="col-sm-12" style="color:#333333"><span> <input type="checkbox" value="1" required="">&nbsp;&nbsp;Je suis d'accord les Conditions générales de vente</span></div>


<input type="submit" class="btn btn-primary" value="Continuer" style="float:right">

<?php echo $this->Form->end(); ?>

<div class="gap"></div>