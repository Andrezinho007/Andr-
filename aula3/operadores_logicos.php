<h2>Operadores Lógicos</h2>
<hr>
Sâo utilizado para avaliar uma expresão formada
por um conjunto de operadores de operadores lógicos.

<ul>
    <li>and | E</li>
    <li>or | ou</li>
    <li>&& | E</li>
    <li>|| | ou</li>
    <li>! | NÃO</li>
    <li>xor | ou Exclusivo</li>
</ul>

<h3>Tabela Vedade - E</h3>
<table border="1">
    <tr>
        <th colspan=3>Tabela do E</th>
        
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>

<strong>Exemplo</strong>
Murilo disse a Bruna que iria as parque se:<br>
<ol>
    <li>Domindo estivesse de sol</li>
    <li>Tivesse realizado tods as atividades do IF.</li>
</ol>

<?php
$condicao1 = true;
$condicao2 = false;
$acao_murilo = ($condicao1 and $condicao2);
var_dump($acao_murilo);
?>

<h3>Tabela Vedade - E</h3>
<table border="1">
    <tr>
        <th colspan=3>Tabela do OU</th>
        
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>

<strong>Exemplo</strong>
Murilo disse a Bruna que iria as parque se:<br>
<ol>
    <li>Domindo estivesse de sol</li>
    <li>Tivesse realizado tods as atividades do IF.</li>
</ol>

<?php
$condicao1 = true;
$condicao2 = false;
$acao_murilo = ($condicao1 or $condicao2);
var_dump($acao_murilo);
?>

<h3>Tabela Vedade - E</h3>
<table border="1">
    <tr>
        <th colspan=3>Tabela do NÃO</th>
        
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
    </tr>

</table>

<strong>Exemplo</strong>
Murilo é umcara legal:<br>


<?php
$condicao1 = true;
$acao_murilo = !(!$condicao1);
var_dump($acao_murilo);
?>


