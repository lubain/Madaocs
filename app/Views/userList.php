<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/table.css">
    <title>user List</title>
</head>
<body>
    <?php include "headerAdmin.php"; ?>
    <div class="scroll" style="margin: 10rem 1.5rem">
        <a href="createUser">ajout</a>
        <table>
            <thead>
                <tr class="tr">
                    <th>id</th>
                    <th>pseudo</th>
                    <th>email</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $row):?>
                    <tr class="tr">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['pseudo'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="<?= base_url("public/update/user/".$row['id']); ?>" class="btn-outline-primary">Mod</a>
                            <a href="<?= base_url("public/delete/user/".$row['id']); ?>"class="btn-retline-danger">supp</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="js/app.js"></script>
</body>
</html>