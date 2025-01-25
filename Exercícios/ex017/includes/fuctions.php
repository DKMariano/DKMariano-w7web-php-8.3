<?php 

/**
 * Recebe o salário anual e retornar o salário mensal
 * @param float $salarioMensal Salário mensal da pessoa
 * @return float $salarioAnual Salário anual da pessoa 
 *  */ 
function calcularSalarioAnual (float $salarioMensal): string{
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = (13 * $salarioMensal)+ $tercoDeFerias;
    return convertNumberToBBRL($salarioAnual);
}

 /**
  * Verifica se a pessoa está empregada ou desempregada
  * @param bool $statusEmprego Status do emprego da pessoa (True ou False)
  * @return string $situacaoEmprego Empregabilidade; 
  */
function verificarEmprego(bool $statusEmprego): string{
    $situacaoEmprego = $statusEmprego == true ? 'Empregado' : 'Desempregado';
    return $situacaoEmprego;
}


 /**
  * Calcula a quantidade de anos que falta para alguém se aposentar
  * @param int $idade Idade da pessoa
  * @param string $sexo Sexo da pessoa
  * @return int Quantidade de anos que falta para se aposentar
  */ 
function calcularFaltanteParaAposentadoria(int $idade, string $sexo): int{
    $anos_necessario_para_aposentar = $sexo == 'M'? IDADE_APOSENTADORIA_MASCULINA - $idade : IDADE_APOSENTADORIA_FEMININA - $idade;

    return $anos_necessario_para_aposentar; 
}

/**
 * Recebe um valor numérico do tipo float e retorna um valor monetário
 * @param float $number Valor numérico
 * @return string Valor monetário
 *  */ 
function convertNumberToBBRL(float $number): string {
    return number_format($number, 2, ",",".");
} 
?>