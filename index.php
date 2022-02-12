<?php   
require('connection.php');


foreach ($dbcon->query('SELECT * from pdoexample')as $fila)
{
print_r($fila);
}
$dbcon=null;