<nav>
    <ul>
        <li><a href="<?=$root?>">Accueil</a></li>
        <?php
        if(is_null($categories)){
            $categories = [];
        }
        foreach ($categories as $category) {
            ?>
            <li><a href="<?=$root?>categorie/<?= $category->getCategorySlug() ?>"><?= $category->getCategoryName() ?></a></li>
            <?php
        }

        ?>
        <li><a href="<?=$root?>?connect">Connexion</a></li>
        <li><a href="<?=$root?>?inscription">Inscription</a></li>
    </ul>
</nav>
