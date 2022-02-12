<?php

$db = "mysql:host=localhost;dbname=2-Pdo";
$user = "bernardo";
$passwd = "12345678";   

try
{
$dbcon= new PDO($db,$user,$passwd);

}

catch(PDOException $e) 
{
print "Error:".$e->getMessage()."<br/>";
die();
}