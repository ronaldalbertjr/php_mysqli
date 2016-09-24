<html>
<head>
    <meta charset="utf-8">
    <title>Estudando PHP com MySQLi</title>
</head>    
<body>
<?php
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    
    $clientes = DBRead('clientes', "WHERE status = 1", 'nome, email');
    
    var_dump($clientes);      
    
?>    
</body>
</html>