<aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar" >
                            <!-- Sidebar user panel -->



                            <!-- sidebar menu -->
                            <ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        <li>
                            <a href="<?php echo $this->webroot; ?>"><i class="ti-home"></i> <span>Accueil</span>

                            </a>
                        </li>
                        
                        <li class="treeview">




                            <a href="#">
                                <i class="fa fa-user"></i> <span>Utilisateur</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">

                                <li><?php echo $this->Html->link('Liste utilisateur',array('controller'=>'users','action'=>'index')); ?></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-id-card" aria-hidden="true"></i> <span>Client</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">


                                <li><?php echo $this->Html->link('Liste client',array('controller'=>'clients','action'=>'index',3)); ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i> <span>Partenaire</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">


                                <li><?php echo $this->Html->link('Liste partenaire validé',array('controller'=>'partenaires','action'=>'index',1)); ?></li>
                                <li><?php echo $this->Html->link('Liste partenaire non validé',array('controller'=>'partenaires','action'=>'index',2)); ?></li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Deals</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">

                                <li><?php echo $this->Html->link('Deal en cours',array('controller'=>'deals','action'=>'index',1,1)); ?></li>
                                <li><?php echo $this->Html->link('Deal passée',array('controller'=>'deals','action'=>'index',1,2)); ?></li>
                                <li><?php echo $this->Html->link('Deal en attente',array('controller'=>'deals','action'=>'index',0)); ?></li>
                            </ul>
                        </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-archive" aria-hidden="true"></i><span>Commande</span>
                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                    </a>
                                    <ul class="treeview-menu">


                                        <li><?php echo $this->Html->link('Liste des commandes',array('controller'=>'commandes','action'=>'index')); ?></li>


                                    </ul>
                                </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-ul" aria-hidden="true"></i>
                                <span>Catégorie</span>
                                <span class="pull-right-container"></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><?php echo $this->Html->link('Ajouter categories',array('controller'=>'categories','action'=>'add')); ?></li>

                                <li><?php echo $this->Html->link('Liste categories',array('controller'=>'categories','action'=>'index')); ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                                <span>Sous catégorie</span>
                                <span class="pull-right-container"></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><?php echo $this->Html->link('Ajouter sous categories',array('controller'=>'sous_categories','action'=>'add')); ?></li>

                                <li><?php echo $this->Html->link('Liste sous categories',array('controller'=>'sous_categories','action'=>'index')); ?></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span> Ville</span>
                                <span class="pull-right-container"></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><?php echo $this->Html->link('Ajouter ville',array('controller'=>'villes','action'=>'add')); ?></li>

                                <li><?php echo $this->Html->link('Liste ville',array('controller'=>'villes','action'=>'index')); ?></li>
                            </ul>
                        </li>


                    </ul>
                </div> <!-- /.sidebar -->
            </aside>