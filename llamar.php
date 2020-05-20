<?php
//establecer conexion
$conexion=mysqli_connect("localhost","root","", "pedidos");

$orden="SELECT * FROM ordenes";

$ejecutar= mysqli_query($orden);

$llamar=mysqli_fetch_array($ejecutar);
?>