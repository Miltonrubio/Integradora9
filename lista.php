<?php
include ('llamar.php');
for($i=0; $i<$llamar; $i++){
	echo "<tr>";
		echo"<td>";
			echo $llamar['NumMesa'];
		echo"</td>";
	echo"<td>";
			echo $llamar['Nombre'];
		echo"</td>";
	echo "</tr>";
}
?>