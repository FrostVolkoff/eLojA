<?php
$error = 'Ocorreu um error, por favor contacte a administração da página. Obrigado!';

$dbHoster = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName= 'eLojA';

mysql_connect($dbHoster, $dbUsername, $dbPassword) or die($error);
mysql_select_db($dbName) or die($error);
?>