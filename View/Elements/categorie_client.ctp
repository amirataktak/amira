

<aside class="sidebar-left">
            <h3 class="mb20">Nos Categories</h3>
            <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                <li class="active"><a href=""><i class="fa fa-ticket"></i>Tous</a>
                <?php
                $categories = $this->requestAction('categories/index');
                foreach ($categories as $categorie):
                ?>
                <li>
                    <a data-toggle="collapse" href="#collapse<?php echo $categorie['Category']['id']; ?>">

                        <?php echo $categorie['Category']['image']; ?>

                        <?php echo $categorie['Category']['libelle']; ?></a>

                    <ul class="list-group collapse" id="collapse<?php echo $categorie['Category']['id']; ?>">
                        <?php foreach ($categorie['SousCategory'] as $sousCategorie): ?>
                            <li class="list-group-item"><?php echo  $sousCategorie['libelle'];?></li>
                        <?php endforeach; ?>
                    </ul>

                </li>
                <?php endforeach; ?>
            </ul>
        </aside>

<?php
//debug($categories);
?>