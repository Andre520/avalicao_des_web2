<?php 

session_start();

$_SESSION['user'] = '';

$_SESSION['passwd'] = '';

session_destroy(); 

header('location: index.php'); 

?>