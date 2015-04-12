<?php

$loc = $_GET['Loc'];
$app = $_GET['App'];
$node = $_GET['Node'];
$aggr = $_GET['Aggr'];
$month = $_GET['M'];
$year = $_GET['Y'];

$vu_name = "vu_" . strtolower($app) . "_" . strtolower($loc);

if ($aggr == 'M')
{
	$qry = "select year,month,day,hour,";
	$qry .= " avg(Open_Appln) as Open_Appln,";
	$qry .= " avg(Search_Page) as Search_Page,";
	$qry .= " avg(Search_Item) as Search_Item,";
	$qry .= " avg(Open_Item) as Open_Item";
	$qry .= " from  $vu_name";
	$qry .= " where month = $month and year = $year";
	$qry .= " and node = '$node'";
	$qry .= " group by year,month,day,hour";
}

if ($aggr == 'Y')
{
	$qry = "select year,month,day,";
	$qry .= " avg(Open_Appln) as Open_Appln,";
	$qry .= " avg(Search_Page) as Search_Page,";
	$qry .= " avg(Search_Item) as Search_Item,";
	$qry .= " avg(Open_Item) as Open_Item";
	$qry .= " from  $vu_name ";
	$qry .= " where year = $year ";
	$qry .= " and node = '$node' ";
	$qry .= " group by year,month,day";
}

echo $qry;

?>
