<?php

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'id10581753_root');
define('DB_PWD', 'Paulo@35422859');
define('DB_DATABASE', 'id10581753_bancodados');
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
