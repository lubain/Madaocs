<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/insertProduit.css">
    <title>form</title>
<body>

    <form id="regForm" action="" method="POST" enctype="multipart/form-data">
        <div class="tab">
            <p><h1 align="center">Marque et model</h1></p>
            <p><input placeholder="Marque..." oninput="this.className = ''" value="<?= $produit["marque"]?>" name="marque"></p>
            <p><input placeholder="Model..." oninput="this.className = ''" value="<?= $produit["model"]?>" name="model"></p>
        </div>
        <div class="tab">:
            <p><h1 align="center"></h1></p>
            <p><input type="file" oninput="this.className = ''" value="<?= $produit["photo"]?>" name="image"></p>
            <p><input placeholder="Nom..." oninput="this.className = ''" value="<?= $produit["nom"]?>" name="nom"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" value="<?= $produit["annee"]?>" name="annee"></p>
            <p><input placeholder="Km..." oninput="this.className = ''" value="<?= $produit["km"]?>" name="km"></p>
            <p><input placeholder="Carburant..." oninput="this.className = ''" value="<?= $produit["carburant"]?>" name="carburant"></p>
            <p><input placeholder="Trasmission..." oninput="this.className = ''" value="<?= $produit["transmission"]?>" name="transmission"></p>
            <p><input placeholder="Prix..." oninput="this.className = ''" value="<?= $produit["prix"]?>" name="prix"></p>
        </div>
        <div class="tab">:
            <p><h1 align="center">Caracteristiques</h1></p>
            <p><input type="number" min="1" placeholder="Encien proprietaire..." oninput="this.className = ''" value="<?= $produit["proprietaire"]?>" name="proprietaire"></p>
            <p><input type="number" min="2" placeholder="Nombre de clée..." oninput="this.className = ''" value="<?= $produit["clee"]?>" name="clee"></p>
            <p><input type="number" min="2" placeholder="Nombre de place..." oninput="this.className = ''" value="<?= $produit["place"]?>" name="place"></p>
            <p><input placeholder="Couleur..." oninput="this.className = ''" value="<?= $produit["couleur"]?>" name="couleur"></p>
            <p><input placeholder="carrousel..." oninput="this.className = ''" value="<?= $produit["carrousel"]?>" name="carrousel"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <script src="../../js/insertProduit.js"></script>
</body>
</html>