<?php
  
	$frutas = ["Laranja", "Limão" ];
	var_dump($frutas);
	echo "<br/>"; 
	
	//array_push() insere um elemnto no final array
    array_push($frutas, "Uva");
	var_dump($frutas);
	echo "<br/>"; 
 
	//array_pop() elimina um elemnto no final array
    array_pop($frutas);
	var_dump($frutas);
	echo "<br/>";
	
	//adicionar um novo indice manualmente
	$frutas[2] = "Morango";
	var_dump($frutas);
	echo "<br/>";
	
	//adicionar um novo indice existente
	$frutas[0] = "Uva";
	var_dump($frutas);
	echo "<br/>";
  
	// count() conta quantidade de elementos no array
	$quantidadeDeItens = count($frutas);
	echo $quantidadeDeItens;
	echo "<br/>";
 
	// in_array() procura o elemento no array
	$temLaranja = in_array("Laranja", $frutas);
    var_dump($temLaranja);
	echo "<br/>";
 
	// in_array() procura o elemento no array
	$temUva = in_array("Uva", $frutas);
	var_dump($temUva);
	echo "<br/>";
 
	$outraFrutas = ["Abacaxi", "Uva"];
 
	// array_merge() une dois array
	$todasFrutas = array_merge($frutas, $outraFrutas);
    var_dump($todasFrutas);
	echo "<br/>";
	
	// array_merge() une dois array COM ORDEM INVERTIDA.
	$todasFrutas = array_merge($outraFrutas, $frutas);
    var_dump($todasFrutas);
	echo "<br/>";
 
?>
