<?php

$filename = "veiculos.txt";

if(!file_exists($filename)){
    $file = fopen($filename, 'w');
} else {
    $file = fopen($filename, 'a');
}

$text = "Modelo do veiculo: " . $_POST['modelo'] . " | Ano: " . $_POST['ano'] . " | Cor: " . $_POST['cor'] . PHP_EOL;

fwrite($file, $text);
fclose($file);
header('location: cadastroVeiculos.php');

?>