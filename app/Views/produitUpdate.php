<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'ra';
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            /* font-family: Raleway; */
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;  
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            /* font-family: Raleway; */
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
<body>

    <form id="regForm" action="" method="POST" enctype="multipart/form-data">
        <div class="tab">
            <p><h1 align="center">Marque et model</h1></p>
            <p><input placeholder="Marque..." oninput="this.className = ''" value="<?= $produit["marque"]?>" name="marque"></p>
            <p><input placeholder="Model..." oninput="this.className = ''" value="<?= $produit["model"]?>" name="model"></p>
        </div>
        <div class="tab">:
            <p><h1 align="center"></h1></p>
            <!-- <p><input placeholder="Photo..." oninput="this.className = ''" value="<?= $produit["photo"]?>" name="photo"></p> -->
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

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style.removeProperty("background-color");
                document.getElementById("nextBtn").innerHTML = 'Valider';
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
</body>
</html>