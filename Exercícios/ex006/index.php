<?php
  
	// A função var_dump() imprime o valor da variável boleano na tela;
 
	$estaEstudando = true;	
    var_dump($estaEstudando);
	echo '<br/>';
 
 
    $valorEstaEstudandoInvertido = !$estaEstudando;
    var_dump($valorEstaEstudandoInvertido);
	echo '<br/>';
 
	$estaEstudando = !$estaEstudando;        	
    var_dump($estaEstudando);
	echo '<br/>';
 
?>
