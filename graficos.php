<?php 
include 'conexao.php';
include 'menu.php';


$x = 0;
$y = 0;
$z = 0;
$w = 0;

$resultado_relatorio = "SELECT * FROM consulta";
$resultado_relatorio = mysqli_query($conexaoBD, $resultado_relatorio);
while($linha_relatorio = mysqli_fetch_assoc($resultado_relatorio)){

$tipo_exame = $linha_relatorio['tipo_exame'];
$quantidade = $linha_relatorio['quantidade'];

    if ($tipo_exame == 'Exame de sangue') {
        $x += $quantidade;
    } elseif ($tipo_exame == 'Ultrassom') {
        $y += $quantidade;
    } elseif ($tipo_exame == 'Endoscopia') {
        $z += $quantidade;
    } elseif ($tipo_exame == 'Hemograma') {
        $w += $quantidade;
    }
}

?>

<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Exame de sangue',     <?=$x?>],
          ['Ultrassom',      <?=$y?>],
          ['Endoscopia',  <?=$z?>],
          ['Hemograma', <?=$w?>],
    
        ]);

        var options = {
          title: 'Exames mais realizados na clínica.'
        };


var options = {
  title: 'Exames mais realizados na clínica.'
};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
         
  </body>
</html>
