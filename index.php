<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <?php include './templates/header.php' ?>
   <h1>Bienvenue sur notre site !</h1>
   <?php 
        if(empty($_SESSION['uname'])): ?>
        <img class="accueil" src="img/home.webp" alt="">
    <?php endif ?>
    <?php
        if($_SESSION['uname'] === 'admin'): ?>
        <a href="secret.php" id="secret">Accès à la page secrète</a>
    <?php endif ?>
   <main>
        <?php if (isset($_POST['fireman'])):?>
            <div class="secretInfos">
                <h2>Fireman</h2>
                <p>Fire Man (ファイヤーマン Faiyāman) is a Robot Master from the original Mega Man. He was built by Dr. Light to work in an incinerator at a waste management facility and is able to wield flames that can reach 7000-8000 degrees.[1] Fire Man can melt or burn through almost anything with his Special Weapon, the Fire Storm, whose weapon system excellently combines offense and defense. Fire Man's and Bomb Man's development began at the same time, and despite being warned by Rock that working with both explosives and fire could be dangerous, Dr. Light went on believing that Ice Man could handle the situation in case anything happened. A few flash fires did occur, but Ice Man ran away saying he doesn't like saunas.</p>
                <img src="./img/Fireman.png" alt="">
            </div>
        <?php endif ?>

        <?php if (isset($_POST['elecman'])):?>
            <div class="secretInfos">
                <h2>Elecman</h2>
                <p>Elec Man (エレキマン Erekiman) is a Robot Master from the original Mega Man. He was created by Dr. Light to control the voltage of nuclear power plants. At the time of his creation, Elec Man was often hailed as Dr. Light's greatest creation and boasts razor-sharp judgement, as well as a physical agility that would not be matched until the creation of Quick Man, who is in turn based on his design. His Special Weapon, the Thunder Beam, fires off devastating bolts of very high-voltage electrical energy in multiple directions, with sufficient power to go through multiple enemies with one shot and even break through solid rocks.</p>
                <img src="./img/elecman.png" alt="">
            </div>
        <?php endif ?>
        
        <?php if (isset($_POST['iceman'])):?>
            <div class="secretInfos">
                <h2>Iceman</h2>
                <p>Ice Man (アイスマン Aisuman) is a Robot Master from the original Mega Man . He was created by Dr. Light to perform human-like tasks under extreme climate conditions. This can be done due to the fact he is impervious to chilling sub-zero temperatures. Ice Man is also capable of functioning in hot environments, though he is less powerful there. His Special Weapon is the Ice Slasher, a sharp ice blade launched from his mouth that can freeze anything with its temperature of 200 degrees below zero. Freeze Man greatly respects him.</p>
                <img src="./img/iceman.png" alt="">   
            </div>
        <?php endif ?>
        
        <?php if (isset($_POST['bombman'])):?>
            <div class="secretInfos">
                <h2>Bombman</h2>
                <p>Bomb Man (ボンバーマン Bonbāman, lit. "Bomberman") is a Robot Master from the original Mega Man. He was created by Doctor Thomas Light for demolition and land development, blasting away debris so that land could be cleared for construction projects, working in tandem with Guts Man. Bomb Man's and Fire Man's development began at the same time, and despite being warned by Rock that working with both explosives and fire could be dangerous, Dr. Light went on believing that Ice Man could handle things if anything happened. A few flash fires did occur, but Ice Man ran away saying he doesn't like saunas.[2] His Special Weapon is the Hyper Bomb—very powerful explosives originally used for land reclamation and destroying abandoned buildings.</p>
                <img src="./img/bombman.png" alt="">
            </div>
        <?php endif ?>
    </main>
</body>
</html>