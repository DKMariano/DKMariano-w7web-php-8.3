<!--------------------------------------------------------------------------- 
    Data: 22/01
    Exercício: 007
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie um array chamado $cores contendo três cores. Adicione uma nova cor ao final do array. Remova a primeira cor do array. Imprima o array resultante.
 --------------------------------------------------------------------------->

<?php
 
	$cores = [
        "Azul",
        "Vermelho",
        "Verde"
	];
 
    $cores[]="Preto";
	print_r($cores);
	echo "<br/>";
 
    array_shift($cores);
	print_r($cores);
	echo "<br/>";
 ?>
