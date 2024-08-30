<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <div class="body">
        <div class="forms">
            <form action="" method="post">
                <div class="container">
                    <h1>Login</h1>
                    <div class="form-control" required>
                        <input type="text" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-control" required>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <p style="color: red;">
                        <?php
                            if (isset($errorPass) && isset($errorEmail)) {
                                if (!$errorEmail && !$errorPass) {
                                    $error = "votre email et mot de passe sont incorrect";
                                } else {
                                    if (!$errorPass) $error = "mot de passe incorrect";
                                    else if (!$errorEmail) $error = "email incorrect";
                                }
                                echo $error;
                            }
                        ?>
                    </p>
                    <input align="center" type="submit" name="envoyer" class="submite" value="Connexion">
                </div>
            </form>
        </div>
    </div>
</body>
</html>