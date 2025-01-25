<!---------------------------------------------------------------------------
    Data: 22/01
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
---------------------------------------------------------------------------->


<?php
 
// function saudacao(){
// 	return 'Ola, mundo';
// }
 
// echo saudacao()."<br/>";
 
 
 
// function somar(float $num1, int $num2, float $num3 = null): float{
// 	return "Número 1: $num1, Numero2: $num2, Numero3: $num3";
// }
 
 
 
// function verificaIdade (int $anoNascimento): int{
// 	$anoAtual = date('Y');
// 	$idade = $anoAtual - $anoNascimento;
// 	return $idade;
// }
 
// echo verificaIdade(2000)."<br/>";
 
// function portaoDeBalada(int $anoNascimento, int $acompanhado = false): string{
//     $idadeParaEntrarBalada = 18;
// 	$idade = verificaIdade($anoNascimento);
 
// 	if ($idade>= $idadeParaEntrarBalada) {
//     	return "Você é maior de idade, então pode entrar na balada";
// 	}elseif($idade < $idadeParaEntrarBalada && $acompanhado == true){
//     	return "Você é menor de idade, mas está acompanhado. Então você pode entrar na balada";
// 	}else{
//     	return "Você não pode entrar na balada.";
// 	}
// }
 
 
// 	echo "1994 sem acompanhante: ".portaoDeBalada(1994)."<br/>";
// 	echo "1994 com acompanhante: ".portaoDeBalada(1994, true)."<br/>";
// 	echo "2007 sem acompanhante: ".portaoDeBalada(2007)."<br/>";
// 	echo "2007 com acompanhante: ".portaoDeBalada(2007, true)."<br/>";
// 	echo "2008 com acompanhante: ".portaoDeBalada(2008, true)."<br/>";
// 	echo "2008 sem acompanhante: ".portaoDeBalada(2008, false)."<br/>";
 
 /**
  * Gera uma strinf de saudação
  *
  * @param string $nome Nome da Pessoa
  * @param string $sobrenome Sobrenome da pessoa
  * @param string $idade Idade da pessoa
  *
  * @return string saudação
  */

 function parametrosNomeados(string $nome, string $sobrenome, int $idade): string {
	return "Olá, $nome $sobrenome. Você tem $idade anos."."<br/>";
 }
 
 echo parametrosNomeados(idade: 34, sobrenome: 'Kobs', nome: 'Alessandro');

/**
 * Soma dois numeros
 * @param float $n1 primeiro numero a ser somado
 * @param float $n2 Segundo numero a ser somado
 * 
 * @return float Soma dois numeros 
**/

 function somar($n1, $n2){
	return $n1 + $n2;
 }

 echo somar (n2: 30, n1:10);

?>
