<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>
<body>
    <?php include "headerAdmin.php"; ?>
    <div class="scroll" style="margin: 10rem 1.5rem;">
        <a href="createProduit">ajout</a>
        <table>
            <thead>
                <tr class="tr">
                    <th>id</th>
                    <th>marque</th>
                    <th>model</th>
                    <th>photo</th>
                    <th>nom</th>
                    <th>annee</th>
                    <th>km</th>
                    <th>carburant</th>
                    <th>transmission</th>
                    <th>prix</th>
                    <th>proprietaire</th>
                    <th>clee</th>
                    <th>place</th>
                    <th>couleur</th>
                    <th>carrousel</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produit as $row):?>
                    <tr class="tr">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['marque'] ?></td>
                        <td><?= $row['model'] ?></td>
                        <td><img src="local/<?= $row['photo'] ?>" alt=""></td>
                        <td><?= $row['nom'] ?></td>
                        <td><?= $row['annee'] ?></td>
                        <td><?= $row['km'] ?></td>
                        <td><?= $row['carburant'] ?></td>
                        <td><?= $row['transmission'] ?></td>
                        <td><?= $row['prix'] ?></td>
                        <td><?= $row['proprietaire'] ?></td>
                        <td><?= $row['clee'] ?></td>
                        <td><?= $row['place'] ?></td>
                        <td><?= $row['couleur'] ?></td>
                        <td><?= $row['carrousel'] ?></td>
                        <td>
                            <a href="<?= base_url("public/update/produit/".$row['id']); ?>" class="btn-outline-primary">M</a>
                            <a href="<?= base_url("public/delete/produit/".$row['id']); ?>"class="btn-retline-danger">S</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="js/app.js"></script>
</body>
</html>