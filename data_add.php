<?php

$loc=$_GET['Loc'];
$app=$_GET['App'];
$node=$_GET['Node'];
$epc=$_GET['Epc'];
$val=$_GET['Val'];
$rdg = trim($val, '{}');

$qry = "insert into menu_poc values (";
$qry .= $epc . ",'";
$qry .= $loc . "','";
$qry .= $app . "','";
$qry .= $node . "',";
$qry .= $rdg . ",'')";

$con = mysqli_connect("localhost", "arnab", "arnab", "perfmon");
if (!$con)
	die('Could not connect: ' . mysqli_error());

if (mysqli_query($con, $qry))
	echo "Completed";
else
	echo "NOK";

?>
