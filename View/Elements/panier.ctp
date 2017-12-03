<?php
$panier = $this->Session->read('panier');

if(count($panier)>0){
?>
    <ul class="shopping-cart-items">

        <?php foreach ($panier as $deal): ?>
        <li>
            <a href="<?php echo $this->webroot;?>deals/detail/<?php echo $deal['Deal']['id']; ?>">
                <img src="<?php echo $this->webroot; ?>files/<?php echo $deal['Deal']['image']; ?>"
                     title="<?php echo $deal['Deal']['titre']; ?>"/>
                <h5><?php echo $deal['Deal']['titre']; ?></h5>

                <span class="shopping-cart-item-price"><?php echo $deal['qte']; ?> x <?php  echo number_format($deal['Deal']['ancien_prix']-(($deal['Deal']['ancien_prix']*$deal['Deal']['remise'])/100), 3, '.', ' '); ?>  DT</span>
            </a>
        </li>

        <?php endforeach; ?>

    </ul>
    <ul class="list-inline text-center">
        <li><a href="<?php echo $this->webroot;?>deals/panier"><i class="fa fa-shopping-cart"></i> Voir Panier</a>
        </li>

    </ul>
<?php } else { ?>

<font color="white"> PANIER VIDE</font>

<?php } ?>


<script>
    function add_panier(deal_id,qte){

        $.ajax({
            url : '<?php echo $this->webroot;?>deals/add_panier',
            type : 'POST',
            data : {deal_id : deal_id, qte:qte},
            dataType : 'html',
            success : function(data){
                $('#panier').html(data);
            }
        });

    }
</script>