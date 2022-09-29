<?php
     session_start();

     if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['passwd']) == true)){
         header('location: index.php');
     }

     echo file_get_contents("Veiculos.txt");
?>