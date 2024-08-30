<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/insertProduit.css">
    <title>form</title>
<body>

    <form id="regForm" action="" method="POST" enctype="multipart/form-data">
        <div class="tab">
            <p><h1 align="center">Marque et model</h1></p>
            <p><input placeholder="Marque..." oninput="this.className = ''" name="marque"></p>
            <p><input placeholder="Model..." oninput="this.className = ''" name="model"></p>
        </div>
        <div class="tab">:
            <p><h1 align="center"></h1></p>
            <p><input type="file" oninput="this.className = ''" name="image"></p>
            <p><input placeholder="Nom..." oninput="this.className = ''" name="nom"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="annee"></p>
            <p><input placeholder="Km..." oninput="this.className = ''" name="km"></p>
            <p><input placeholder="Transmission..." oninput="this.className = ''" name="transmission"></p>
            <p><input placeholder="Carburant..." oninput="this.className = ''" name="carburant"></p>
            <p><input placeholder="Prix..." oninput="this.className = ''" name="prix"></p>
        </div>
        <div class="tab">:
            <p><h1 align="center">Caracteristiques</h1></p>
            <p><input type="number" min="1" placeholder="Encien proprietaire..." oninput="this.className = ''" name="proprietaire"></p>
            <p><input placeholder="Couleur..." oninput="this.className = ''" name="couleur"></p>
            <p><input type="number" min="2" placeholder="Nombre de place..." oninput="this.className = ''" name="place"></p>
            <p><input type="number" min="2" placeholder="Nombre de clée..." oninput="this.className = ''" name="clee"></p>
            <p><input type="text" placeholder="Carrousel" oninput="this.className = ''" name="carrousel"></p>
            <p><input type="file" value="" multiple="" oninput="this.className = ''" name="userfile[]"></p>
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
            <span class="step"></span>
        </div>
    </form>

    <script src="js/insertProduit.js"></script>
</body>
</html>