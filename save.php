<?php
include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$medico = $_POST['medico']; 
$data_consulta = $_POST['data_consulta'];


   $salvar = mysqli_query($conexaoBD, "INSERT INTO paciente(nome, sobrenome, email, medico, data_consulta) VALUES ('$nome', '$sobrenome', '$email', '$medico', '$data_consulta')");
  
    if($salvar){
        header('location: tabela.php');
    } 
?>