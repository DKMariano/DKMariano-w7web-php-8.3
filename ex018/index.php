<!---------------------------------------------------------------------------
    Data: 22/01
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
---------------------------------------------------------------------------->


<?php
 
function saudacao(){
	return 'Ola, mundo';
}
 
echo saudacao()."<br/>";
 
 
 
function somar($num1, $num2, $num3){
	return "Número 1: $num1, Numero2: $num2, Numero3: $num3";
}
 
 
 
function verificaIdade ($anoNascimento){
	$anoAtual = date('Y');
	$idade = $anoAtual - $anoNascimento;
	return $idade;
}
 
echo verificaIdade(2000)."<br/>";
 
function portaoDeBalada($anoNascimento, $acompanhado = false){
    $idadeParaEntrarBalada = 18;
	$idade = verificaIdade($anoNascimento);
 
	if ($idade>= $idadeParaEntrarBalada) {
    	return "Você é maior de idade, então pode entrar na balada";
	}elseif($idade < $idadeParaEntrarBalada && $acompanhado == true){
    	return "Você é menor de idade, mas está acompanhado. Então você pode entrar na balada";
	}else{
    	return "Você não pode entrar na balada.";
	}
}
 
 
	echo "1994 sem acompanhante: ".portaoDeBalada(1994)."<br/>";
	echo "1994 com acompanhante: ".portaoDeBalada(1994, true)."<br/>";
	echo "2007 sem acompanhante: ".portaoDeBalada(2007)."<br/>";
	echo "2007 com acompanhante: ".portaoDeBalada(2007, true)."<br/>";
	echo "2008 com acompanhante: ".portaoDeBalada(2008, true)."<br/>";
	echo "2008 sem acompanhante: ".portaoDeBalada(2008, false)."<br/>";
 
 
 
 
?>
