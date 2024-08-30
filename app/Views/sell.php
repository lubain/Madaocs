<?php $nav = 'sell'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/sell.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Sell</title>
</head>
<body>
    <?php include "header.php"; ?>
    <p style="margin-top:10rem;"></p>
    <div class="home">
        <div class="response swiper-container home-slider"> 
            <h1 style="color:#192a56;" align="center">Evaluez votre voiture et recevez votre prix directement</h1>
            <div class="slide">
                <div class="content">
                    <p class="para">combient vaut votre vehicule? Renseignez simplement ses caracteristiques, et recevez gratuitement un prix garanti, 
                        <span>100% en ligne.</span><br><br>
                        <span>ensuite, vous decidez: </span>vous pouvez soit utiliser la reprise de votre ancien vehicule pour payer votre nouveau vehicule MADAOCS, soit nous vendre simplement votre ancien vehicule, que vous achetiez ou non une autre voiture. <br><br>
                        <span>c'est rapide, simple et securisé de faire reprendre son vehicule chez MADAOCS !</span>
                    </p>
                    <a href="sell/detailSell" align="center"><div class="evalue btn">Evaluer votre voiture maintenant</div></a>
                </div>
                <div class="image">
                    <img src="img/voitures-d-occasion-la-meilleure-facon-de-vendre.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php include "contact.php"; ?>
    <p style="margin-top:5rem;"></p>
    <?php include "footer.php"; ?>
    <script src="js/app.js"></script>
</body>
</html>