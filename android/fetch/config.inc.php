<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbresep";

try {
    	$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>