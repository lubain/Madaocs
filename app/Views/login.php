<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Ajout</h1>
        <form action="" method="post" >
            <div class="form-floating mb-3 mt-3">
                <label for="pseudo">pseudo:</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Enter pseudo" name="pseudo" required>
            </div>
            <div class="form-floating mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>