<!---------------------------------------------------------------------------
    Data: 25/01
    Exercício: 012
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie dois scripts usando laço FOREACH. O primeiro deve somar todos os elementos do array $numeros([1, 2, 3, 4, 5]) e imprimir o resultado da soma na tela. Já o segundo, deve imprimir na tela o nome  e o preço de cada produto do array associativo $produto(["Produto1"=> 10, "Produto2"=> 20,"Produto3"=> 30]).
---------------------------------------------------------------------------->

<?php 

// SCRIPT 01
$numeros = [1, 2, 3, 4, 5];
$resultado =0;

foreach($numeros as $numero){
    $resultado += $numero;
}

echo "A soma do array números é igual a $resultado.<br/>"; 

// SCRIPT 02
$produtos = [
    "Produto1"=> 10, 
    "Produto2"=> 20,
    "Produto3"=> 30,
];

echo "<br/> Lista de todos os produtos e seus respectivos preços: <br/>";
$valorTotal= 0;
foreach($produtos as $item=> $preco){
    echo "Nome: $item, Preço: $preco <br/>";
    $valorTotal+= $preco;
}
echo "Preço total: R$ $valorTotal<br/>";

?>