<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	// Verbindung aufnehmen
	$con = mysqli_connect("","root");
	
	// Liste der Datenbanken
	$dbresult = mysqli_query($con, "show databases");
	
	// Anzahl der Datenbanken, Überschrift
	$numdbs = mysqli_num_rows($dbresult);
	echo "<h3 align='center'>MySQL, Informationen über Struktur und Inhalt aller $numdbs vorhandenen Datenbanken</h3>";
	
	// Schleife über alle Datenbanken
	$d = 0;
	while($dbsatz = mysqli_fetch_array($dbresult))
	{
		// Nummer und Name der Datenbanken
		$d++;
		$dbname = $dbsatz[0];
		
		// Datenbank auswählen
		mysqli_select_db($con, $dbname);
		
		// Liste der Tabellen der aktuellen Datenbank
		$tabresult = mysqli_query($con, "show tables from $dbname");
		
		// Anzahl der Tabellen
		$numtabs = mysqli_num_rows($tabresult);
		if($numtabs==1)
			$tabtext = "Tabelle";
		else
			$tabtext = "Tabellen";
		
		// Tabelle beginnen, Überschrift
		echo "<table border='1' width='100%'><tr>"
		. "<td colspan='8' bgcolor='#c3c3c3'>"
		. "<b>Datenbank $d: $dbname</b><br/>"
		. "$numtabs $tabtext</td></tr>";
		
		// Schleife über alle Tabellen
		$t = 0;
		while($tabdsatz = mysqli_fetch_array($tabresult))
		{
			// Nummer und Name der Tabelle
			$t++;
			$tabname = $tabdsatz[0];
			
			// Liste der Felder der aktuellen Tabelle
			$fdresult = mysqli_query($con, "show columns from $tabname");
			
			//Anzahl der Felder
			$numfds = mysqli_num_rows($fdresult);
			if($numfds==1)
				$fdtext = "Feld";
			else
				$fdtext = "Felder";
			
			// Anzahl der Datensätze
			$dataresult = mysqli_query($con, "select * from $tabname");
			
			if(!$dataresult)
				$numdata = -1;
			else
				$numdata = mysqli_num_rows($dataresult);
			
			if($numdata==1)
				$datatext = "Datensatz";
			else
				$datatext = "Datensätze";
			
			// Anzeigebutton
			if($numdata==0)
				$ft = "<br/>&nbsp;";
			else if ($numdata==-1)
				$ft = "Anzeige-<br/>problem";
			else
			{
				$ft = "<form action='db_browser_b.php' method='post'>"
				. "<input type='hidden' name='dbname' value='$dbname'/>"
				. "<input type='hidden' name='tabname' value='$tabname'/>"
				. "<input type='submit' value='ansehen'/>"
				. "</form>";
			}
			
			// Tabelle der Felder, Überschrift
			echo "<tr>"
			. "<td width='24%' bgcolor='#c3c3c3'>Tabelle $d / $t : $tabname<br/>"
			. "$numfds $fdtext, $numdata $datatext</td>"
			. "<td width='16%' align='center' bgcolor='#c3c3c3'>$ft</td>"
			. "<td width='16%' bgcolor='#c3c3c3'>Name:</td>"
			. "<td width='16%' bgcolor='#c3c3c3'>Typ:</td>"
			. "<td width='7%' bgcolor='#c3c3c3'>Null:</td>"
			. "<td width='7%' bgcolor='#c3c3c3'>Key:</td>"
			. "<td width='7%' bgcolor='#c3c3c3'>Default:</td>"
			. "<td width='7%' bgcolor='#c3c3c3'>Extra:</td>"
			. "</tr>";
			
			// Schleife über alle Felder
			$f = 0;
			while($fddsatz = mysqli_fetch_array($fdresult))
			{
				// Nummer des Feldes, Feldname, -typ, -länge, und -flags
				$f++;
				$fdname = $fddsatz[0];
				$fdtype = $fddsatz[1];
				$fdnull = $fddsatz[2];
				$fdkey = $fddsatz[3];
				$fddefault = $fddsatz[4];
				$fdextra = $fddsatz[5];
				
				if(!$fdkey)
					$fdkey = "&nbsp;";
				if(!$fddefault)
					$fddefault = "&nbsp;";
				if(!$fdextra)
					$fdextra = "&nbsp;";
				
				// Ausgabe der Feldinformation
				echo "<tr>"
				. "<td colspan='2'>Feld $d / $t / $f:</td>"
				. "<td>$fdname</td>"
				. "<td>$fdtype</td>"
				. "<td>$fdnull</td>"
				. "<td>$fdkey</td>"
				. "<td>$fddefault</td>"
				. "<td>$fdextra</td>"
				. "</tr>";
			}
		}
		
		// Tabelle beenden
		echo "</table><p>&nbsp;</p>";
	}
	
	mysqli_close($con);
?>
</body>
</html>