<!-------------------------------------------------------------------------
 ! 	Data: 21/01															  !
 ! 	Exercício: 004														  !
 ! 	Instituição de Ensino: b7web										  !
 ! 	Disciplina: PHP														  !
 ! 	Professor: Aloessandro Kobs											  !
 ! 	Aluno: D. K. Mariano												  !
 ! 	Descrição: Retirar apenas a palavra "Pera" do array e imprimi-la na   ! !             tela, usaNDO A FUNÇão substr().                            !
 ------------------------------------------------------------------------->

 
<?php
	$texto = "Pera, uva, maça e salada mista";
	
	$numeroCaracteres = strlen($texto);
 
	$posicaoPalavraUva = strpos($texto, "uva");
 
    $posicaoPalavraPera = strpos($texto, "Pera");
 
	$parteDaString = substr($texto, 0, 4);
 
	echo $parteDaString;
 
?>
