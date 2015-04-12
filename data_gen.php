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

$con = mysqli_connect("localhost", "arnab", "arnab", "perfmon");
if (!$con)
	die('Could not connect: ' . mysqli_error());

$result = mysqli_query ($con, $qry);

$data = array
(
	'cols' => array
	(
		array('label' => 'Date', 'type' => 'datetime'),
		array('label' => 'Open_Appln', 'type' => 'number'),
		array('label' => 'Search_Page', 'type' => 'number'),
		array('label' => 'Search_Item', 'type' => 'number'),
		array('label' => 'Open_Item', 'type' => 'number')
	),
	'rows' => array()
);

while($row = mysqli_fetch_assoc ($result))
{
	$year = $row['Year'];
	$month = $row['Month'] - 1;
	$day = $row['Day'];
	$hour = $row['Hour'];
	if ($hour == null)
	$hour = 0;

	$data['rows'][] = array
	('c' => array
		(
			array('v' => "Date($year, $month, $day, $hour)"),
			array('v' => $row['Open_Appln']),
			array('v' => $row['Search_Page']),
			array('v' => $row['Search_Item']),
			array('v' => $row['Open_Item'])
		)
	);
}

echo json_encode(array('data'=>$data));

?>
