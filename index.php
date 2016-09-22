<html>
<head>
    <meta charset="utf-8">
    <title>Estudando PHP com MySQLi</title>
</head>    
<body>
<?php
    require 'config.php';
    require 'connection.php';
    
    $link = DBConnect();
    
    DBClose($link);
?>    
</body>
</html>