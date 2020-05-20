<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="pedidos";
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec("SET CHARACTER SET utf8");

