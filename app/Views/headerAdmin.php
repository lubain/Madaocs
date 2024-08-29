<header>
    <a href=""></a>
    <nav class="navbar">
        <a href="<?= base_url("public/userList"); ?>" class="<?php if (isset($nav) && $nav == 'search'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'search'){echo 'style="color:white;"';}?>>Gestion Des Membres</span>
        </a>
        <a href="<?= base_url("public/produitList"); ?>" class="<?php if (isset($nav) && $nav == 'sell'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'sell'){echo 'style="color:white;"';}?>>Gestion Des Produits</span>
        </a>
    </nav>
    <div class="icons">
        <span id="menu-bars"><img src="img/icons/Bars.ico" alt=""></span>
    </div>
</header>