<?php
include 'menu.php';
include 'listar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Consultas</title>
</head>

<body>

<div class="card" style="float:right">
    <div class="card-body">
        <a href="index.php" class="btn btn-dark">Continuar cadastrando</a>  
    </div>
    
</div>

<br><br>    

    
    <div class="container col-md-6">
        <h1>Consultas marcadas</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data da consulta</th>
                    <th scope="col">Médico(a)</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>

            <?php while ($paciente = mysqli_fetch_assoc($listar_dados)) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $paciente['id_paciente'];?></th>
                        <td><?php echo $paciente['nome']; ?></td>
                        <td><?php echo $paciente['sobrenome']; ?></td>
                        <td><?php echo $paciente['email']; ?></td>
                        <td><?php echo $paciente['medico']; ?></td>
                        <td><?php echo $paciente['data_consulta']; ?></td>
                        
                    </td>

                    <td>
                        <a href="editarbd.php?id_paciente=<?php echo $paciente['id_paciente']; ?>" class="btn btn-warning"> Editar </a>
                    </td>

                        <td>
                            <a href="deletar.php?id_paciente=<?php echo $paciente['id_paciente']; ?>" class="btn btn-danger"> Deletar </a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>