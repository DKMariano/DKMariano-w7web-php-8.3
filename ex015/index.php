<!---------------------------------------------------------------------------
    Data: 22/01
    Exercício: 010
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie um script PHP que determina se um cliente tem direito a um desconto especial em uma loja e qual será o desconto. O cliente tem direito ao desconto de 20% se o valor total de suas compras for maior que R$200 ou se ele for membro VIP. Se i valor total das compras estiver entre R$150 e R$200, o cliente pode receber um desconto de 10%.
---------------------------------------------------------------------------->

<?php
 
	$totalCompras = 1;
	$clienteVip = true;
 
	if ($totalCompras>200 || $clienteVip==true){
    	$totalCompras = $totalCompras * 0.8;
    	echo "Parabéns! Você tem direito a 20% de desconto";
    	echo "<br/>";
    	echo "Pague apenas o valor de R$ ".$totalCompras.".";
	} elseif($totalCompras>=150 && $totalCompras<=200){    	
    	$totalCompras = $totalCompras *  0.9;
    	echo "Parabéns! Você tem direito a 10% de desconto";
    	echo "<br/>";
    	echo "Pague apenas o valor de R$ ".$totalCompras.".";
	} else{
    	echo "O valor total de suas compras deu R$ ".$totalCompras.".";
	}
?>
