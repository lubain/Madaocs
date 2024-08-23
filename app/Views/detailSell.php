<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/insertProduit.css">
    <title>InfoSell</title>
</head>
<body>
    <form id="regForm" action="index.php" method="post">
        <h1></h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Etape1:
            <p><h1 align="center">Marque et model</h1></p>
            <p><input placeholder="Marque..." oninput="this.className = ''" name="marque"></p>
            <p><input placeholder="Model..." oninput="this.className = ''" name="model"></p>
        </div>
        <div class="tab">etape2:
            <p><h1 align="center">Caracteristiques</h1></p>
            <p><input placeholder="Interval de rix..." oninput="this.className = ''" name="prix"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
            <p><input placeholder="Année..." oninput="this.className = ''" name="Annee"></p>
        </div>
        <div class="tab">etape3:
            <p><h1 align="center">Condition</h1></p>
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">etape4:
            <p><h1 align="center">Echell de prix</h1></p>
            <p><input placeholder="Prix..." oninput="this.className = ''" name="prix"></p>
        </div>
        <div class="tab">etape4:
            <p><h1 align="center">Rendez-vous</h1></p>
            <p><input type="textarea" col="30" placeholder="Rendez-vous..." oninput="this.className = ''" name="rendez-vous"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
    <script src="../js/insertProduit.js"></script>
</body>
</html>