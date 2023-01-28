<?php
	include "../../conexion.php";
	$estado=$_POST["estado"];
	mysqli_query($conectador,"update estudiante set estado='$estado';");
	mysqli_close($conectador);

?>
<script language="javascript">setTimeout("self.close();",1000)</script>