<?php
	function mittelwert()
	{
		$param = func_get_args();
		$anz = func_num_args();
		echo "<p>Der Mittelwert von: ";
		$sum = 0;
		for($i=0; $i<$anz;$i++)
		{
			$sum = $sum + $param[$i];
			echo " $param[$i], ";
		}
		echo " ist " . $sum / $anz . "</p>";
	}
	
	function maximum()
	{
		$param = func_get_args();
		$anz = func_num_args();
		echo "<p>Die höchste Zahl aus |";
		
		$mx = $param [0];
		for ($i=0; $i<$anz;$i++)
		{
			echo " $param[$i]| ";
			if($mx<$param[$i])
				$mx = $param[$i];
		}
		echo " ist $mx</p>";
	}
?>