<?php
    	$bolo1 = [
        	'açucar',
        	'farinha de trigo',
        	'ovo',
        	'leite',
        	'fermento em pó'
    	];
    	
    	$bolo2 = [
            "vasilha",
        	"água morna",
       	...$bolo1,
        	'corante'
    	];
    	
    	echo $bolo2[2]."<br/>";
 
    	$lista1 = ['bonieky', 'pedro', 'joão'];
    	$lista2 = ['patricia', 'fabricia', 'melissa'];
    	$lista3 = [...$lista1, 'fulano', ...$lista2];
 
 
        print_r($lista1)
 
	?>
