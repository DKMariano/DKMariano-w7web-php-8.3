<?php 

echo "Laço FOREACH array simples! <br/>";
$nomes = [
    "Alessandro", 
    "Bonieky", 
    "João", 
    "Maria"
];

foreach($nomes as $nome){
    echo "$nome <br/>";
}



echo "<br/> Laço FOREACH array associativo (chave + valor)! <br/>";
$dados = [
    "nome"=> "Alessandro",
    "idade"=> 33,
];

foreach($dados as $chave=> $valor){
    echo "$chave: $valor <br/>";
}
?>