<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include './templates/header.php'?>
    <main>
        <div id="form">
            <form class="form" action="./controllers/session.php" method="POST">
                <label for="uname"> Username </label>
                <input type="text" id="uname" name="uname" placeholder="Megaman24" required>
                <label for="pass">Mot de passe </label>
                <input type="password" id="pass" name="pass" required>
                <?php if (isset($_SESSION['wrongPass']) && $_SESSION['wrongPass'] === true) : ?>
                <p class="wrongPass">Invalid username or password</p>
                <?php $_SESSION['wrongPass'] = false; ?>
                <?php endif ?>
                <input type="submit" value="Envoyer" id="sub">
            </form>
        </div>
    </main>

</body>

</html>