<?php
session_start();

if($_POST['uname'] === 'admin' && $_POST['pass'] === '0000'){
    $_SESSION['uname'] = 'admin';
}elseif($_POST['uname'] === 'plèbe' && $_POST['pass'] === '1234'){
    $_SESSION['uname'] = 'plèbe';
}

if(isset($_SESSION['uname'])){
    header('Location: ../index.php');
}else{
    $_SESSION['wrongPass']= true;
    header('Location: ../connexion.php');
}
