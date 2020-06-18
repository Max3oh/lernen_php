<html>
<body>
<?php
	/*Kontrolldaten */
	echo "<p>Zur Kontrolle:<br/>";
	echo "Originalname: " . $_FILES["upfile"]["name"] . "<br/>";
	echo "Dateigröße: " . $_FILES["upfile"]["size"] . "<br/>";
	echo "Dateityp: " . $_FILES["upfile"]["type"] . "<br/>";
	
	/*Dateiendung extrahieren*/
	$dname = explode(".",$_FILES["upfile"]["name"]);
	$ext = $dname[count($dname)-1];
	echo "Dateiendung: $ext<br/>";
	
	/*Temporärer Dateiname auf dem Server*/
	echo "Temporärer Dateiname: " . $_FILES["upfile"]["tmp_name"] . "</p>";
	
	/*Temporäre Datei dauerhaft an gewünschten Ort kopieren, falls sie vorhanden ist und die richtige Endung besitzt*/
	if($_FILES["upfile"]["size"]>0 && $ext=="gif")
	{
		copy($_FILES["upfile"]["tmp_name"],"im_upload.gif");
		echo "<p>Datei wurde kopiert in im_upload.gif<br/>";
		echo "<img src='im_upload.gif' /></p>";
	}
	else
	{
		echo "Kopierfehler: Datei nicht vorhanden oder keine GIF-Datei</p>";
	}
?>
</body>
</html>