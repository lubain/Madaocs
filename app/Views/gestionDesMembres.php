<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h1>gestion Des Membres</h1>
        <a href="login">ajout</a>
        <table class="table table-borser table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>pseudo</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user as $row):?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['pseudo'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                            <a href="update?id=<?= $row['id'] ?>" class="btn btn-out line-primary">modiffier</a>
                            <a href="delete?id=<?= $row['id'] ?>"class="btn btn-retline-danger">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>