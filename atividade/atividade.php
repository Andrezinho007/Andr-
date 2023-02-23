<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculadora</title>
</head>

 <body>
  

    <?php
        
        $nota1 ="nota1";
        $nota2 ="nota2";
        $nota3 ="nota3";

      $media = ($nota1 + $nota2 + $nota3) / 3;


        if ($media >= 6) 
      {
        echo "Aprovado";
      } 
        else if ($media > 3 and $media < 6) 
      {
        echo "Em recuperação";
      } 
        else 
      {
        echo "Reprovado";
      }
    ?>
  </body>
</html>