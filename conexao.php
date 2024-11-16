<?php
    
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'clinica';


    $conexaoBD = new MySQLi($dbHost,$dbUsername,$dbPassword,$dbName);
    if($conexaoBD->connect_error){
        echo "Desconectado! Erro: " . $conexaoBD->connect_error;
   
}
    

?>