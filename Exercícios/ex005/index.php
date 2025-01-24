<?php
  
	$num1 = 1.1;
 
	$num2 = 2.75;
 
	// Operações matemática básicas
 
	echo 'Adição: '.($num1+$num2);
	echo '<br/>';
 
	echo 'Subtração: '.($num1-$num2);
	echo '<br/>';
 
	echo 'Multiplicação: '.($num1*$num2);
	echo '<br/>';
	
	echo 'Subtração: '.($num1/$num2);
	echo '<br/>';
	echo '<br/>';
 
	// Funções de arredondamento: round()
 
	//round()
	$num3 = 2.4;
	echo 'Arredondamento com round(): o número '.$num3.' é arredondado para o inteiro mais próximo, ficando igual a '.round($num3);
	echo '<br/>';
 
	//floor()
	$num3 = 3.99;
	echo 'Arredondamento com floor(): o número '.$num3.' é arredondado para baixo, ficando igual a '.floor($num3);
	echo '<br/>';
 
	
	//ceil()
	$num3= 5.000001;
	echo 'Arredondamento com ceil(): o número '.$num3.' é arredondado para cima, ficando igual a '.ceil($num3);
	echo '<br/>';
 
?>
