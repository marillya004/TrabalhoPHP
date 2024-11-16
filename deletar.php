<?php
include 'conexao.php';

$id = $_GET["id_paciente"];
if (isset($_GET['id_paciente'])) {
    $sqlDelete = mysqli_query($conexaoBD, "DELETE FROM paciente WHERE id_paciente = {$id}")
    or die (mysqli_error($conexaoBD));

    header('location: tabela.php');
}
?>