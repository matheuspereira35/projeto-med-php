<?php 
include_once('conn.php');
if(isset($_POST['excluir'])){
    $id = $_POST['id'];

    $sqlEx = "UPDATE medcare.paciente SET excluido = 1 WHERE id = $id";

    $result = $conn -> query($sqlEx);

    if($result == false){
        header('Location: /projeto_med/index.php?excluido=nao');
    }else{
        header('Location: /projeto_med/index.php?excluido=sim');

    }
}




