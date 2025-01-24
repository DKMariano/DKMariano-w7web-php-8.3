<!-------------------------------------------------------------------------- 
    Data: 22/01
    Exercício: 009
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie um script PHP que verifica se uma pessoa pode entrar em uma festa. Para entrar na festa, a pessoa precisa ter, pelo menos, 18 anos ou estar acompanhada por um responsável. 
--------------------------------------------------------------------------->


<?php

	$idade = 43;
    $acompanhadoResponsavel = true;
 
	if ($idade >= 18){
    	echo "Você pode entrar na festa!";
	} elseif ($idade <= 18 && $acompanhadoResponsavel == true){
    	echo "Apesar de ser menor de idade, você está acompanhado por um responsável. Logo, pode entrar na festa.";
	} else{
    	echo "Você NÃO pode entrar na festa!";
	}
?>
