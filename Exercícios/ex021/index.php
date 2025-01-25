<?php 

// laço com WHILE
$idade = 1;
echo "Laço WHILE! <br/>";
while ($idade < 10){
    echo "A sua idade é $idade <br/>";
    $idade++;

}
echo "Sai do laço WHILE com idade igual a $idade!<br/><br/>";


// laço com DO WHILE
$idade = 1;
echo "Laço DO WHILE! <br/>";
do {
    echo "A sua idade é $idade <br/>";
    $idade++;
} while ($idade <10);
echo "Sai do laço DO WHILE com idade igual a $idade!<br/><br/>";

// laço com FOR
$idade = 1;
echo "Laço FOR! <br/>";
for($idade = 1; $idade < 10; $idade += 1){
    echo "Olá, você tem $idade anos! <br/>";
}

echo "Sai do laço FOR com idade igual a $idade!<br/><br/>";

?>