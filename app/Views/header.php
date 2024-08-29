<header>
    <a href="<?= base_url("public/"); ?>"><img src="img/icons/logoweb.png" alt="" class="dim"></a>
    <nav class="navbar">
        <a href="<?= base_url("public/search"); ?>" class="<?php if (isset($nav) && $nav == 'search'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'search'){echo 'style="color:white;"';}?>><i class="fas fa-search"></i> trouver votre voiture</span>
        </a>
        <a href="<?= base_url("public/sell"); ?>" class="<?php if (isset($nav) && $nav == 'sell'){echo 'act';}?>">
            <span class="span"<?php if (isset($nav) && $nav == 'sell'){echo 'style="color:white;"';}?>><i class="fas fa-sign-in-alt"></i> vendez votre voiture</span>
        </a>
        <a href="#contact"><i class="fas fa-link"></i> contact</a>
    </nav>
    <div class="icons">
        <i id="menu-bars"><img src="img/icons/Bars.ico" alt=""></i>
        <i id="search-icon" class="user"><img src="img/icons/avatardefault_92824.ico" alt="" id="user-icon"></i>
    </div>
    <?php require_once 'form.php';?>
</header>