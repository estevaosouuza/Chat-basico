<?php
    include("../controller/connect.php");
    $id_delete = $_POST['id_delete'];

	$sql='delete from lista where id ='.$id_delete; //buscando registros
	$resultados=mysqli_query($conexao_bd,$sql)
	or die (mysql_error());
	if (@mysqli_num_rows($resultados)==0)
		echo "Sem mensagens";
	while($res=mysqli_fetch_array($resultados)){
		?>
	<div class="balao-chat">
	<span onclick="excluir(<?php echo $res[0]?>)" class="botao-fechar">X</span>
		<h2><?php echo $res[1] ?></h2>
		<p><?php echo $res[2] ?></p>
		<span><?php echo $res[3]?></span>
	</div>
		<?php
	}
?>