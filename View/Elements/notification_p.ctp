<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-id-card-o"></i>
        <span class="label label-warning"><?php echo count($tab_part); ?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">Vous avez <?php echo count($tab_part); ?> partenaire(s) en attente</li>
        <li>
            <ul class="menu">
                <?php foreach ($tab_part as $partenaire): ?>
                    <li><a href="<?php echo $this->webroot;?>admin/partenaires/index/2"> <?php echo $partenaire['Partenaire']['nom_de_societe']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="footer"><a href="<?php echo $this->webroot;?>admin/partenaires/index/2">Voir Tous</a></li>
    </ul>
</li>