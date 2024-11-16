<?php
include 'menu.php';
include 'editarbd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clínica</title>
</head>
<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-reader">
                        <h4 class="container-fluid">Cadastro de pacientes </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-12">

        <form action="save.php" method="post" class="form-control">
            <div class="row mb-3">
                <div class="col-sm">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="" class="form-control" placeholder="Nome">
                </div>
            </div>   

            <div class="row mb-3">
                <div class="col-sm">
                    <label>Sobrenome:</label>
                    <input type="text" name="sobrenome" id="" class="form-control" placeholder="Sobrenome">
                </div>
            </div>   
            
            <div class="row mb-3">
                <div class="col-sm">
                    <label>Email: </label>
                    <input type="text" name="email" id="" class="form-control" placeholder="Email">
                </div>
           </div>
           

            <div class="row mb-3">
                <div class="col-sm">
                    <label>Data da Consulta</label>
                    <input type="date" name="data_consulta" id="" class="form-control" placeholder="Data">
                </div>
           </div>

           <div class="row mb-3">
               <div class="col">
                   <label>Médico(a)</label>
                   <input type="text" name="medico" id="" class="form-control" placeholder="Médico(a)">
               </div>
          </div>
          <br>

        
              <button type="submit" class="btn btn-dark">Cadastrar</button>
          

        </form>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
         </body>
</html>