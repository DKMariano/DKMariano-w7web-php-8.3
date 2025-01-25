<!---------------------------------------------------------------------------
    Data: 22/01
    Exercício: 011
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie dois scripts usando o laço WHILE. O primeiro para escrever a tabuada do número 5 (5x0 até 5x10). O segundo para escrever a soma de todos números de 0 a 20.
---------------------------------------------------------------------------->

<?php 

// SCRIPT 01
$tabuadaAtual = 1;

echo "Tabuada de 5 <br/>";

while($tabuadaAtual<=10){
    echo "5 x $tabuadaAtual = ".($tabuadaAtual * 5)."<br/>";
    $tabuadaAtual++;
}

$numeros = 1;
$somaTodosNumeros = 0;


// SCRIPT 02
echo "<br/> Soma dos números entre 0 a 20 <br/>";

while($numeros <=20){    
    echo "$numeros + $somaTodosNumeros = ";
    $somaTodosNumeros += $numeros;        
    echo "$somaTodosNumeros <br/> ";
    $numeros++;
}

?>