<?php  
include 'menu.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    
<div class="container col-md-12">
    <h3>Relatório de exames por mês</h3>
    <form action="salveRel.php" method="post" class="form-control">
        <div class="row mb-3">
            <div class="col-sm">
            <label>Quantidade por mês:</label>
            <input type="int" name="quantidade" id="" class="form-control" placeholder="Quantidade">
    
        </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm">
            <label>Exame:</label>
            <input type="text" name="tipo_exame" id="" class="form-control" placeholder="Exame">
    
        </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm">
            <label>Mês:</label>
            <input type="text" name="mes" id="" class="form-control" placeholder="Mês">
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
 </div>
        



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
         
</body>
</html>
