<h2>Matriz</h2>

<?php

$produto = [
    "nome" => "Notebook",
    "marca" => "Dell",
    "preco" => "5000"
];

$produto2 = [
    "nome" => "Camera",
    "marca" => "Nikon",
    "preco" => "3000"
];

$produto3 = [
    "nome" => "Smartphone",
    "marca" => "LG",
    "preco" => "1200"
];
$tabela = [
    $produto,
    $produto2,
    $produto3
];
var_dump($tabela);
echo $tabela[1] ["marca"];

//json - javascript Object Notation 
echo "<br><br><br><br>";
echo json_encode($tabela);
?>