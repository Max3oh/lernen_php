<html>
<head>
<?php
	function add($x,$y)
	{
		$s = $$x + $y;
		return $s;
	}
	function sub($x,$y)
	{
		$s = $x - $y;
		return $s;
	}
	function mult($x,$y)
	{
		$s = $x * $y;
		return $s;
	}
	function div($x,$y)
	{
		$s = $x / $y;
		return $s;
	}
?>
</head>
<body>
<?php
	if($_POST["oper"] == "+")
		$erg = add($_POST["w1"],$_POST["w2"]);
	else if($_POST["oper"] == "-")
		$erg = sub($_POST["w1"],$_POST["w2"]);
	else if($_POST["oper"] == "*")
		$erg = mult($_POST["w1"],$_POST["w2"]);
	else if($_POST["oper"] == "/")
		$erg = div($_POST["w1"],$_POST["w2"]);
	echo $_POST["w1"] . " " . $_POST["oper"] . " " . $_POST["w2"] . " = " . $erg;
?>
</body>
</html>