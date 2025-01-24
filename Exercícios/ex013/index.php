<!-------------------------------------------------------------------------- 
    Data: 22/01
    Exercício: 008
    Instituição de Ensino: b7web
    Disciplina: PHP
    Professor: Aloessandro Kobs
    Aluno: D. K. Mariano
    Descrição: Crie um script PHP que simula um sistema de login simples, com as seguintes regras:
		1.O sistema deve verificar se o nome de usuário e a senha fornecidos estão correto.
		2.Se ambos estiverem corretos, exiba uma mensagem de boas-vindas.
		3.Se o nome de usuário estiver correto, mas a senha estiver errada, exiba uma mensagem de erro de senha.
		4.Se o nome de usuário estiver incorreto, exiba uma mensagem de erro de nome de usuário. 
---------------------------------------------------------------------------->

 
<?php

	$usuarioCorreto = 'admin';
	$senhaCorreta = '123456';
 
	$usuario = 'admin';
	$senha = '123456';
 
	if ($usuario==$usuarioCorreto && $senha==$senhaCorreta){
    	echo "Seja bem-vindo, ".$usuario."!";
    }elseif($usuario==$usuarioCorreto && $senha!=$senhaCorreta){
    	echo "A senha está incorreta! ";
    }elseif($usuario!=$usuarioCorreto){
    	echo "O usuário está incorreto!";
	}
 
?>
