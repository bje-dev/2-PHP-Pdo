<?php   
require('connection.php');

echo nl2br("User and password database:\n");

foreach ($dbcon->query('SELECT * from pdoexample')as $fila)
{
echo ($fila[1]."\n");
echo ($fila[2]."\n");
echo nl2br("\n");
}
$dbcon=null;