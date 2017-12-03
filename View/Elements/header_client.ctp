

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
            <nav>
                <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                    <li class="active"><a href="<?php echo $this->webroot; ?>"> <i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                    </li>
                    <li><a href="<?php echo $this->webroot;?>deals/index/1">Hackathon en cours</a>
                    </li>
                    <li><a href="<?php echo $this->webroot;?>deals/index/2">Hackathon passé </a>
                    </li>


                </ul>
            </nav>
        </div>
        <div class="col-md-7">
            <ul class="login-register">

                <?php
                $role = $this->Session->read('role');
                if(!empty($role) && $role==3){
                    ?>

                    <li class="shopping-cart"><a href="<?php echo $this->webroot; ?>Deals/"><i class=""></i> Evennement</a>
                        <div class="shopping-cart-box" id="panier">
                            <?php echo $this->element('panier'); ?>
                        </div>
                    </li>



                    <li><a href="<?php echo $this->webroot; ?>" >EQUIPE</a>
                    </li>
                    <li><a href="<?php echo $this->webroot;?>clients/compte">Bonjour,    <i class="fa fa-user"></i><?php echo $this->Session->read('prenom').' '.$this->Session->read('nom'); ?></a>
                    </li>

                    <li><a href="<?php echo $this->webroot; ?>users/logout" ><i class="fa fa-sign-in"></i>Deconnexion</a>
                    </li>
                <?php $role = $this->Session->read('role');
                }elseif(!empty($role) && $role==2) { ?>

                    <li><a href="<?php echo $this->webroot; ?>deals/mes_deals" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>Mes Hackathon</a>
                    </li>

                    <li><a href="<?php echo $this->webroot; ?>Deals/proposerdeal" > <i class="fa fa-shopping-bag" aria-hidden="true"></i>Proposer Hackathon</a>
                    </li>
                    <li><a href="<?php echo $this->webroot;?>Partenaires/comptepart">Bonjour,    <i class="fa fa-user"></i><?php echo $this->Session->read('prenom').' '.$this->Session->read('nom'); ?></a>
                    </li>

                    <li><a href="<?php echo $this->webroot; ?>users/logout" ><i class="fa fa-sign-in"></i>Deconnexion</a>
                    </li>


                <?php }else { ?>


                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                    class="fa fa-sign-in"></i>Connexion</a>
                    </li>
                    <li><a href="<?php echo $this->webroot ?>clients/inscription"><i class="fa fa-edit"></i>Inscription participant</a>
                    </li>

                    <li><a href="<?php echo $this->webroot ?>partenaires/inscription"><i class="fa fa-edit"></i>Inscription organisateur</a>
                    </li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>
