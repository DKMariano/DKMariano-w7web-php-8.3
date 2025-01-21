<!-- 
Data:20/01/2025
Exercício 02:Buscar a posião das palavras uva e Pera e imprimir na tela: "A palavra uva começa na posição X e a pera na posição Y"-->
 
<?php
	$texto = "Pera, uva, maça e salada mista";
	
	$numeroCaracteres = strlen($texto);
 
    $posicaoPalavraPera = strpos($texto, "Pera");
 
	$posicaoPalavraUva = strpos($texto, "uva");
 
	echo "A palavra uva começa na posição ".$posicaoPalavraUva." e a pera na posição ".$posicaoPalavraPera;
 
?>
