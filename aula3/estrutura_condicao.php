<h2>Estrutura de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada 
    para avaliar qual instrução deve ser 
    executada, dada uma condição.

    Se a condição dor verdadeira (true) executada a 
    intrução 1, caso contrário executada a instrução

<strong>Exemplo</strong>
<pre>
    if (<em>condicao</em>){
        //instrução 1 
    }else{
        //intrução 2
    }
</pre>
</p>

<?php
/*
Para passar de ano é necessário tirar no 
minimo 6 pontos em cada disciplina.Murilo
tirou...Ele foi aprovado ou não?
*/
$nota_do_murilo = 10;
$faltas = 0;
if($nota_do_murilo >=6 && $faltas < 75){
    echo"Murilo foi aprovado!";
}else{
    echo"Murilo foi reprovado";
}
?>
<strong>Exemplo 2</strong>
<p>O aluno para ser aprovado precisa obter 
    nota superior a 6 pontos, para o exame final
    precisa ter tirado menos que 6 e mais que 3.
    Nota menores que 3 são reprovações diretas.
</p>
<?php
$nota = 6;
$if($nota >=6){
    echo"Aprovado";
}else if($nota > 3){
    echo"Faz exame final";
}else {
    echo"Reprovado";
}
?>