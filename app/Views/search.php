<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Searh</title>
</head>
<body>
    <?php include "header.php"; ?>
    <p style="margin-top:10rem;"></p>
    <form action="" method="get" class="search" autocomplete="off">
        <input type="search" name="q" placeholder="Recherche..." class="input1">
        <button class="submit"><img src="img/icons/search.io" alt="" width="40px" height="40px"></button>
    </form>
    <section class="dishes">
    <?php if (isset($nb)): ?>
        <h1 class="heading">Resultat :<?= $nb;?></h1>
    <?php else :?>
        <h1 class="heading">Aucun resultat...</h1>
    <?php endif ?>
    <!-- <h1 class="heading"></h1> -->
    <div class="box-container"> 
        <?php $i = 0; ?>
        <?php foreach ($produits as $produit): ?>
            <div class="box">
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-eye"></a>
                <h2 style="font-size: 2rem;color: #192a56;"><span style="font-size: 2.6rem"><?= $produit["marque"] ?></span> <?= $produit["model"] ?></h2>
                <a href="search/detailSearch?id=<?= $produit["id"] ?>"><img src="local/<?= $produit["photo"] ?>"  alt=""></a>
                <h2 style="font-size: 2rem;color: #192a56;">
                    .<?= $produit["annee"]?>
                    <i></i><?= $produit["km"]?><br>
                    <i class="fas fa-gas-pump"></i><?= $produit["carburant"].'  '?>
                    <i class="fas fa-cogs"></i><?= $produit["transmission"].'  '?>
                    <i class="fas fa-euro-sign"></i><?= $produit["prix"] ?>
                </h2>
            </div>
            <?php $i++ ?>
        <?php endforeach; ?>
        <?php $nb = $i?>
    </section>
    <?php include "contact.php"; ?>
    <p style="margin-top:5rem;"></p>
    <?php include "footer.php"; ?>
    <script src="js/app.js"></script>
</body>
</html>