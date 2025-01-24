<!---------------------------------------------------------------------------
    Data: 22/01
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
---------------------------------------------------------------------------->
<?php
	$nome = "João Silva";
	$idade = 25;
	$sexo = 'M';
	$salarioMensal = 2210.30;
	$salarioAnual = 12 * $salarioMensal;
	$statusEmprego = true;
	$anosAposentadoria = 40;
	$habilidades = ["PHP, JavaScript, HTML, CSS"];
  
	$situacaoEmprego = null;
	if($statusEmprego == true){
        $situacaoEmprego = 'Empregado';
	}else{
        $situacaoEmprego = 'Desempregado';
	}
	
	$totalAposentar = null;
	if($sexo == 'M'){
        $totalAposentar = 65 - $idade;
	}else{
        $totalAposentar = 62 - $idade;
	}
 
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Explorando Variáveis em PHP</title>
	<style>
    	body {
        	display: flex;
            justify-content: center;
            align-items: center;
        	height: 100vh;
        	margin: 0;
    	}
 
    	.container {
        	display: flex;
            justify-content: center;
            align-items: center;
        	height: 100%;
    	}
 
    	.card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        	padding: 20px;
        	max-width: 400px;
            text-align: center;
    	}
 
    	h1 {
        	color: #333;
    	}
 
    	p {
        	color: #666;
        	font-size: 1.1em;
    	}
 
    	strong {
        	color: #000;
    	}
	</style>
</head>
 
<body>
	<div class="container">
    	<div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong> <?= $nome; ?> </strong></p>
            <p>Idade: <strong> <?= $idade?> </strong></p>
            <p>Sexo: <strong> <?= $sexo ?> </strong></p>
            <p>Salário Mensal: <strong> R$ <?= number_format($salarioMensal, 2, ",", ".");?> </strong></p>
            <p>Salário Anual: <strong> R$ <?= number_format($salarioAnual, 2, ",",".");?> </strong></p>
            <p>Status de Emprego: <strong> <?= $situacaoEmprego; ?> </strong></p>
            <p>Anos para Aposentadoria: <strong> <?= $totalAposentar;?>
            </strong></p>
            <p>Habilidades: <strong>
                <?php
                    echo implode(", ",$habilidades);
            	?>
 
            </strong></p>
    	</div>
	</div>
</body>
 
</html>
