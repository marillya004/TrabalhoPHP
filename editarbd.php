<?php
    include 'conexao.php';

    if (isset($_GET['id_paciente'])) {
        $id = $_GET['id_paciente'];
        $sql = mysqli_query($conexaoBD, "SELECT * FROM paciente WHERE id_paciente = $id");

        $count = (is_array($sql) ? count($sql) : 1);

        if ($count) {
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome'];
            $sobrenome = $n['sobrenome'];
            $email = $n['email'];
            $medico = $n['medico'];
            $data_consulta = $n['data_consulta'];
            
        }
    }

    if (isset($_POST['editar'])) {
        $id = $_GET['id_paciente'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $medico = $_POST['medico'];
        $data_consulta = $_POST['data_consulta'];
        
        $queryUpdate = "UPDATE paciente SET nome ='$nome', sobrenome='$sobrenome',email ='$email', medico ='$medico', data_consulta='$data_consulta' WHERE id_paciente = $id";
        
        $consulta = mysqli_query($conexaoBD, $queryUpdate);

        header('location: tabela.php');
    }

    
    
?>

