<?php
include 'conexao.php';

$exame = $_POST['tipo_exame'];
$quantidade = $_POST['quantidade'];
$mes = $_POST['mes'];



   $salvar = mysqli_query($conexaoBD, "INSERT INTO consulta(tipo_exame, quantidade, mes) VALUES ('$exame','$quantidade', '$mes')");
  
    if($salvar){
        header('location: relatorio.php');
    } 
?>