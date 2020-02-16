<?php

$a=10;
$b=6;
function sum()
{
	global $a;
	global $b;

	return $a+$b;

}
echo sum();

$xyz="value from php";

if($a===$b)
{
	echo " true";
}
else 
{
	echo "false";
}

define("Greetings", "Welcome to Nakhalpara");
echo "Greetings";

var_dump($a);
$val=print($a);
echo "<br>".$val;

$abc=[4];
$xyz=array(4);
$student=['name'=>'wakib','id'=>'17-33699-1'];
echo $abc[0];


$students = [ 
					's1'=> ['name'=>'Wakib', 'course'=> 'Webtech', 'cgpa'=>3.00], 
					's2'=> ['name'=>'xyz', 'course'=> 'Data Structure', 'cgpa'=>3.0], 
					's3'=> ['name'=>'abc', 'course'=> 'atp-3', 'cgpa'=>2.1], 
					's4'=> ['name'=>'pgr', 'course'=> 'ICS', 'cgpa'=>1.5] 
				];

echo $students['s4']['course'];

function sum($a=0,$b=0)
{
	return $a+$b;
}

for($i=0; $i<5;)
    {
		 $i++;
		//header('content-type: text/plain');
		echo $i.". webtech"."<br>";
	}

	//echo $_GET['a'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>This is html content:     <?php print($xyz); ?> </h1>
</body>
</html>

