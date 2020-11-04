
<?php


$conexao_bd = mysqli_connect('localhost', 'root', '', 'lista');



// Verificar se houve erro de conexão com a função mysqli_connect_errno(), caso não retorne 0 significa que houve erro na conexão.
//Função mysqli_connect_error() retorna a descrição da MSG de erro em caso de falha na conexão
	if(mysqli_connect_errno()){
		echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
	}



/* Função para ajustar o charset de comunicação entre a aplicação e o BD
		mysqli_set_charset(conexao do banco, 'charset a ser usado');
*/
	mysqli_set_charset($conexao_bd,'utf8');

?>