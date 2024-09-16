<?php $nav = 'p'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <title>Document</title>
</head>
<body>
    <?php include "headerAdmin.php"; ?>
    <div class="scroll" style="margin: 10rem 1.5rem;">
        <a href="createProduit" style="font-size:2rem;">
            <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AddIcon">
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path>
            </svg>
            ajout
        </a>
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
                        <td><img src="local/<?= $row['photo'] ?>" width="40" height="40" alt=""></td>
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
                            <a href="<?= base_url("public/update/produit/".$row['id']); ?>" class="btn-outline-primary">
                                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EditIcon">
                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34a.9959.9959 0 0 0-1.41 0l-1.83 1.83 3.75 3.75z"></path>
                                </svg>
                            </a>
                            <a href="<?= base_url("public/delete/produit/".$row['id']); ?>" class="btn-retline-danger">
                                <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DeleteIcon">
                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="js/app.js"></script>
</body>
</html>