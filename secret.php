<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php include './templates/header.php' ?>
    <form id="characters" action="index.php" method="POST">

    <input type="checkbox" id="fireman" name="fireman" checked>
    <label for="fireman">Fireman</label>
    <input type="checkbox" id="elecman" name="elecman" checked>
    <label for="elecman">Elecman</label>
    <input type="checkbox" id="iceman" name="iceman" checked >
    <label for="iceman">Iceman</label>
    <input type="checkbox" id="bombman" name="bombman" checked >
    <label for="bombman">Bombman</label>
    <input type="submit" value="Envoyer">
    </form>
</body>

</html>