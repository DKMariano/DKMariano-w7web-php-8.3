<!---------------------------------------------------------------------------
    Data: 25/01
    Exercício: 012
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie dois scripts usando laço FOR. O primeiro deve escrever na tela todos os números de 1 a 10. Já o segundo, deve desenhar meio triângulo com asteriscos (*) de 10 linhas.
---------------------------------------------------------------------------->

<?php 

echo "Contagem de 01 a 10 <br/>";
for($num = 1; $num <= 10; $num++){
    echo $num."<br/>";
}

echo "<br/>Meio Triângulo com FOR<br/>";
for($linha = 1; $linha <= 10; $linha++){
    for($asteriscos = 1; $asteriscos <= $linha; $asteriscos++){
        echo "*";
    }
    echo "<br/>";
}








?>