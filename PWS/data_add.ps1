clear
$url="http://localhost/perfmon/data_add.php?Loc=SIN&App=MA&Node=L&Epc=1080&Val={1,2,3,4}"

$req = [System.Net.WebRequest]::Create($url)
$res = New-Object System.IO.StreamReader -argumentList $req.GetResponse().GetResponseStream();

Write-Host $res.ReadToEnd();
