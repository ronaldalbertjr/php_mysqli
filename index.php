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
    
    $nome = "Ronald Albert";
    $dados = array('nome' => 'Ronald Albert', 
                   'idade' => 17);
    
    $query = "INSERT INTO clientes (nome) VALUES ('$nome')";
    var_dump(DBExecute($query));
?>    
</body>
</html>