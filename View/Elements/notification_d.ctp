<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-shopping-bag"></i>
        <span class="label label-warning"><?php echo count($tab_notif); ?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">Vous avez <?php echo count($tab_notif); ?> deal(s) en attente</li>
        <li>
            <ul class="menu">
                <?php foreach ($tab_notif as $deal): ?>
                    <li><a href="<?php echo $this->webroot;?>admin/deals/index/0"> <?php echo $deal['Deal']['titre']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="footer"><a href="<?php echo $this->webroot;?>admin/deals/index/0">Voir Tous</a></li>
    </ul>
</li>