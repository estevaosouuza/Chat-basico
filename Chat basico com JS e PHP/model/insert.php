<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

include("../controller/connect.php");
    $titulo = $_POST['nome'];
    $texto = $_POST['mensagem'];

     $horario =strftime('%e/%m/%Y - %H:%M:%S', strtotime('now'));

    
    $sql = "INSERT INTO lista (titulo, texto, horario) VALUES ('$titulo', '$texto' , '$horario')";
    mysqli_query($conexao_bd,$sql) or die(error());
    $response = array("success" => true);
    echo json_encode($response);


?>