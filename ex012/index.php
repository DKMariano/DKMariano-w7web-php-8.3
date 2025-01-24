<!---------------------------------------------------------------------------
    Data: 22/01
    Exercício: 007
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie um array associativo $preços onde as chaves são seus preços. Atualize o preço de um dos produtos adicionados + R$ 10,00. Atualize os preços do primeiro produto reduzindo -R$ 1,00. Imprima o array resultante.
---------------------------------------------------------------------------->

<?php




	$precos = [
        "Bola"=>10,
        "Skate"=>250,
        "Patenete"=>100
	];
 
    $precos["Patenete"] += 10;
    $precos["Bola"] -= 1;
 
	print_r($precos);
 
?>
