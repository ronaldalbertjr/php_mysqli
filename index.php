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
    
    $clientes = array('nome' => 'Ronald Albert', 'email' => 'ronaldalbert1609@gmail.com', 'idade' => 18, 'status' => 1);
    
    $grava = DBCreate('clientes', $clientes);    
    
?>    
</body>
</html>