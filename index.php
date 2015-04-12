<html>
<head>
	<title>PerfMon - Menu (POC)</title>
	<script src="https://www.google.com/jsapi"></script>
	<script src="js/index.js"></script>
</head>
<body>
	<table border="1">
	<tr><th colspan="9">PerfMon - Menu (POC) v1.4</th></tr>
	<tr><th colspan="9">&nbsp;</th></tr>
	<tr align="center">
		<th>Appln</th>
		<th>Location</th>
		<th>Node</th>
		<th>Scenario</th>
		<th>Grouping</th>
		<th>Year</th>
		<th>Month</th>
		<th>Day</th>
		<td><input type="button" id="btnReset" name="btnSReset" value="Reset" onclick="Reset()"></td>
	</tr>
	<tr align="center">
		<td>
			<select id="selApp">
				<option value="0" selected>-</option>
				<option value="CR">CR</option>
				<option value="MA">MA</option>
				<option value="GK">GK</option>
				<option value="BG">BG</option>
			</select>
		</td>
		<td>
			<select id="selLoc">
				<option value="0" selected>-</option>
				<option value="BOM">BOM</option>
				<option value="SIN">SIN</option>
				<option value="PAR">PAR</option>
				<option value="NYK">NYK</option>
			</select>
		</td>
		<td>
			<select id="selNode">
				<option value="0" selected>-</option>
				<option value="L">L</option>
				<option value="M">M</option>
				<option value="S">S</option>
			</select>
		</td>
		<td>
			<select id="selScn">
				<option value="0" selected>-</option>
				<option value="1">Scn 1</option>
				<option value="2">Scn 2</option>
				<option value="3">Scn 3</option>
			</select>
		</td>
		<td>
			<select id="selAggr">
				<option value="0" selected>-</option>
				<option value="Y">Yearly</option>
				<option value="M">Monthly</option>
				<option value="D">Daily</option>
				<option value="T">Today</option>
			</select>
		</td>
		<td>
			<select id="selYear">
				<option value="0" selected>-</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
			</select>
		</td>
		<td>
			<select id="selMonth">
				<option value="0" selected>-</option>
				<option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">May</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Aug</option>
				<option value="9">Sep</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>
			</select>
		</td>
		<td>
			<select id="selDay">
				<option value="0" selected>-</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
		</td>
		<td>
			<input type="button" id="btnSubmit" name="btnSubmit" value="Submit" onclick="Validate()">
		</td>
	</tr>
	</table>
	<table border="1">
		<tr><th>Graph</th></tr>
		<tr><th>&nbsp;</th></tr>
		<tr><td><div id="Graph" style="width: 1200px; height: 450px;"></div></td></tr>
	</table>
</body>
</html>