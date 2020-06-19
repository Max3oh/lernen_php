<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	if(isset($_POST["auswahl"]))
	{
		$con = mysqli_connect("", "root");
		mysqli_select_db($con, "firma");
		
		$sql = "delete from personen where" . " personalnummer = " . $_POST["auswahl"];
		
		mysqli_query($con, $sql);
		$num = mysqli_affected_rows($con);
		if($num>0)
			echo "<p> Der Datensatz wurde gelöscht</p>";
		else
			echo "<p> Der Datensatz wurde nicht gelöscht</p>",
		
		mysqli_close($con);
	}
?>
<p>Zurück zur <a href="db_loeschen_a.php"> Auswahl</a></p>
</body>
</html>