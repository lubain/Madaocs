<header>
    <a href="admin" class="icons"><i class="fas fa-home"></i></a>
    <nav class="navbar">
        <a href="<?= base_url("public/userList"); ?>" class="<?php if (isset($nav) && $nav == 'm'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'm'){echo 'style="color:white;"';}?>><i class="fas fa-users"></i> Gestion Des Membres</span>
        </a>
        <a href="<?= base_url("public/produitList"); ?>" class="<?php if (isset($nav) && $nav == 'p'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'p'){echo 'style="color:white;"';}?>>Gestion Des Produits</span>
        </a>
    </nav>
    <div class="icons">
        <a href="logout"><i class="fas fa-sign-out-alt"></i>logout</a>
        <span id="menu-bars"><img src="img/icons/Bars.ico" alt=""></span>
    </div>
</header>