<div class="box-container"> 
    <?php $i = 0; ?>
    <?php foreach ($produits as $produit): ?>
        <div class="box">
            <a href="" class="fas fa-heart"></a>
            <a href="" class="fas fa-eye"></a>
            <h2 style="font-size: 2rem;color: #192a56;"><span style="font-size: 2.6rem"><?= $produit["marque"] ?></span> <?= $produit["model"] ?></h2>
            <a href="detailSearch.php?id=<?= $produit["id"] ?>"><img src="local/<?= $produit["photo"] ?>"  alt=""></a>
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