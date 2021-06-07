<?php session_start();
?>
<header>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./infos.php">Infos</a></li>
            <?php if(empty($_SESSION['uname'])):?> <li class="connex"><a href="./connexion.php">Connexion</a><?php endif ?>
            <?php if(isset($_SESSION['uname'])):?> <li id="connexion"><a href="" > Bonjour <?= $_SESSION['uname'] ?></a><div class="logout"><a href="./controllers/logout.php">Déco</a></div></li></li><?php endif ?>
        </ul>
    </nav>  
</header>   