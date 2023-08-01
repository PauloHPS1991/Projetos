<?php

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PWD', '');
define('DB_DATABASE', '');
$dsn = "";

try {
    $PDO = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_DATABASE, DB_USER, DB_PWD);
            
    if ($PDO) {
       // echo "Conexão realizada com sucesso!";
    } else {
       // echo "Problemas na conexão!";
    }
} catch (PDOException $exc) {
    echo "Problemas na conexão!";
}
?>
