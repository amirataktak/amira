<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-pills nav-stacked nav-arrow">
                    <li class="active"><a>Mes deals</a>
                    </li>

                </ul>
            </aside>
        </div>
        <div class="gap gap-small"></div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $statut = array('0'=>'En attente','1'=>'Confirmé','2'=>'Refusé');
                    //debug($deals);
                    ?>
                    <table class="table table-order">
                        <thead>
                        <tr>
                            <th>Deal</th>
                            <th>Prix</th>
                            <th>Date deb</th>
                            <th>Date fin</th>
                            <th>Statut</th>
                            <th>NB Acheteurs</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php foreach ($deals as $deal): ?>
                            <?php
                            $nb = $this->requestAction('/deals/nb_acheteur/'.$deal['Deal']['id'])
                            ?>
                            <tr>
                                <td><?php echo $this->Html->link(h($deal['Deal']['titre']),array('controller'=>'deals','action'=>'detail',$deal['Deal']['id'])); ?>&nbsp;</td>
                                <td><?php echo number_format($deal['Deal']['nouveau_prix'], 3, ',', ' '); ?>&nbsp;</td>
                                <td><?php echo h($deal['Deal']['date_deb']); ?>&nbsp;</td>
                                <td><?php echo h($deal['Deal']['date_fin']); ?>&nbsp;</td>
                                <td><?php echo $statut[$deal['Deal']['etat']]; ?>&nbsp;</td>
                                <td><?php echo $nb; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="gap"></div>
        </div>
    </div>

</div>