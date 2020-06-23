<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	if(isset($_POST["auswahl"]))
	{
		$con = mysqli_connect("", "root");
		mysqli_select_db($con, "hardware");
		$sql = "delete from fp where " . "artnummer = '" . $_POST["auswahl"] . "'";
		mysqli_query($con, $sql);
		$num = mysqli_affected_rows($con);
		if($num>0)
			echo "<p>Datensatz wurde gelöscht</p>";
		else
			echo "<p>Datensatz wurde nicht gelöscht</p>";
		
		mysqli_close($con);
	}
?>
	<p>Zurück zur <a href="u_db_loeschen_a.php">auswahl</a></p>
</body>
</html>