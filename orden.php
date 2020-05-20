<?php
$conexion=mysqli_connect("localhost","root","", "pedidos");
$NumMesa= $_POST ["NumMesa"];
$Nombre=$_POST ["Nombre"];
$PlaEntrada=$_POST["PlaEntrada"];
$PlaPrincipal=$_POST["PlaPrincipal"];
$Postre=$_POST["Postre"];
$Bebida=$_POST["Bebida"];
$Aditamientos=$_POST["Aditamientos"];

$insertar="INSERT INTO ordenes (NumMesa, Nombre,PlaEntrada, PlaPrincipal, Postre, Bebida, Aditamientos) VALUES ('$NumMesa','$Nombre','$PlaEntrada','$PlaPrincipal','$Postre','$Bebida','$Aditamientos')";

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
	echo "error al rejistrarse";
}else{
	echo "se hiso el pedido";
}
mysqli_close($conexion);
?>