var data,options;
google.load("visualization", "1", {packages:["corechart"]});

function Reset()
{
	document.getElementById("selApp").selectedIndex = 0;
	document.getElementById("selLoc").selectedIndex = 0;
	document.getElementById("selNode").selectedIndex = 0;
	document.getElementById("selScn").selectedIndex = 0;
	document.getElementById("selAggr").selectedIndex = 0;
	document.getElementById("selYear").selectedIndex = 0;
	document.getElementById("selMonth").selectedIndex = 0;
	document.getElementById("selDay").selectedIndex = 0;
	document.getElementById('Graph').innerHTML = "";
}

function Validate()
{
	var flag = false;
    var err_msg = "";
	var qry = "";

	var scn,app,node,loc,aggr,year,month,day;
	app = document.getElementById("selApp")[document.getElementById("selApp").selectedIndex].value;
	node = document.getElementById("selNode")[document.getElementById("selNode").selectedIndex].value;
	loc = document.getElementById("selLoc")[document.getElementById("selLoc").selectedIndex].value;
	scn = document.getElementById("selScn")[document.getElementById("selScn").selectedIndex].value;
	aggr = document.getElementById("selAggr")[document.getElementById("selAggr").selectedIndex].value;
	year = document.getElementById("selYear")[document.getElementById("selYear").selectedIndex].value;
	month = document.getElementById("selMonth")[document.getElementById("selMonth").selectedIndex].value;
	day = document.getElementById("selDay")[document.getElementById("selDay").selectedIndex].value;

	if (app == 0)
    {
		err_msg += "Appln not selected\n";
		flag = true;
    }

	if (node == 0)
    {
		err_msg += "Node not selected\n";
		flag = true;
    }

	if (loc == 0)
    {
		err_msg += "Location not selected\n";
		flag = true;
    }

	if (scn == 0)
    {
		err_msg += "Scenario not selected\n";
		flag = true;
    }

	if (aggr == 0)
    {
		err_msg += "Aggr not selected\n";
		flag = true;
    }

    if (year == 0 && (aggr == 'Y' || aggr == 'M'))
	{
		err_msg += "Year not Selected\n";
		flag = true;
	}

    if (month == 0 && aggr == 'M')
    {
		err_msg += "Month not Selected\n";
		flag = true
    }

    if(flag)
		alert (err_msg);
    else
    {
		qry += "App=" + app;
		qry += "&Loc=" + loc;
		qry += "&Node=" + node;
		qry += "&Aggr=" + aggr;
		qry += "&M=" + month;
		qry += "&Y=" + year;

		var url = "data_gen.php?" + qry;

		ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
			if(ajax.readyState==4)
			{
				eval("result = " + ajax.responseText);
				data = new google.visualization.DataTable(result['data']);
			}
		}
		ajax.open("GET",url,false);
		ajax.send(null);
		drawChart();
    }
}

function drawChart()
{
	var options =
	{
		hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
		vAxis: {minValue: 0},
		chartArea: {left: 50, width: 1000, height: 400 },
		isStacked: true

	};
	var chart = new google.visualization.AreaChart(document.getElementById('Graph'));
	chart.draw(data, options);
}
