<h2>Exercicio</h2>
<?php

$numero = $_GET['numero'];

// Loop para exibir a tabuada
for($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}

?>