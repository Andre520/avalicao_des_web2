<?php
    session_start();

    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    if($user == 'fatec' and $passwd == 'araras'){
        $_SESSION['user'] = $user;
        $_SESSION['passwd'] = $passwd;
        header('location:acesso.php');
    }else{
        unset($_SESSION['user']);
        unset($_SESSION['passwd']);
        header('location:index.php');
    }


?>