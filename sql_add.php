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

echo $qry;

?>
