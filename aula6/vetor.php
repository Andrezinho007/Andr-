<h2>Vetores</h2>
<p>
    São estruturas de armazenamento compostos heterogenêas,
    que podem ser indexadas númericamente ou textualmente.
</p>

<?php
    //exemolo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota ."<br>";
    //exemplo vetor indexado númericamente
    $notas = []; // outra forma $nota = array();
    $notas [] = 6;
    $notas [] = 3;
    // var_dump($notas);
    // imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) /2;

    //Vetores com indice textual
    $notas = []; //cria um valor vazio
    $notas ["Debora"] = 7;
    $notas ["Murilo"] = 7.8;
    $notas ["Poliana"] = 9;
    echo "<p></p>";
    echo "A Poliana tirou nota" . $notas ["Poliana"];

    // imprimindo o conteúdo de um vetor númerico.

    $valores = [];
    $valores [] = 2;
    $valores [] = 4;
    $valores [] = 8;
    $valores [] = 10;
     $valores[] = 12;
    $valores [] = 14;
    $valores [] = 16;

    // ou - $valores = [2,4,8,10,14,16];

     // imprimindo o conteúdo de um vetor númerico.
     echo "<br>";
    for ($i = 0; $i <=6; $i++){
        echo $valores[$i] . "<br>";
    }

    $acumulador = 0;
    for ($i = 0; $i <=6; $i++) {
        $acumulador =  $acumulador + $valores[$i];
      }
      echo "O valor final do acumulador é: " . $acumulador;
?>

