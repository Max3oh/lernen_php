<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	/* Für diese Programm alle Fehler anzeigen */
	ini_set("error_repoprting", 32767);
	
	/* Variable Unbekannt*/
	try
	{
		if(!isset($a))
			throw new Exception("Variable unbekannt");
		$c = 2 * $a;
		echo "<p>$c</p>";
	}
	catch(Exception $e)
	{
		echo $e->getMessage() . "<br/>";
	}
	finally
	{
		echo "<p>Ende, Variable unbekannt</p>";
	}
	
	/* Division durch 0 */
	$x = 24;
	for($i=4; $i> -3;$i--)
	{
		try
		{
			if($i == 0)
				throw new Exception("Division durch 0");
			$z = $x / $i;
			echo "$x / $i = $z<br/>";
		}
		catch(Exception $e)
		{
			echo $e->getMessage() . "<br/>";
		}
	}
	
	/* Zugriff auf Funktion */
	try
	{
		if(!function_exists("fkt"))
			throw new Exception("Funktion unbekannt");
		fkt();
	}
	catch(Exception $e)
	{
		echo $e->getMessage() . "<br/>";
	}
	finally
	{
		echo "<p>Ende, Funktion unbekannt</p>";
	}
	
	echo "Ende";
?>
</body>
</html>