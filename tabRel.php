<?php 
include 'listarRel.php';
include 'menu.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <title>Relatório</title>
</head>
<body>

<br>
<div class="container col-md-6">
    <table class="table table-dark table-striped table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">Mês</th>
                <th scope="col">Exame</th>
                <th scope="col">Quantidade por mês</th>
            </tr>
        </thead>
        
    <?php while ($consulta = mysqli_fetch_assoc($list)){?>
        <tbody>
            <tr>
                
                <td><?php echo $consulta['mes']; ?></td>
                <td><?php echo $consulta['tipo_exame']; ?></td>
                <td><?php echo $consulta['quantidade']; ?></td>
                
                
            </td>
        </tbody>
        <?php } ?>
    </table>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>