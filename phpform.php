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

if($a==$b)
{
	echo "true";
}
else
{
	echo "false";
}

if( $a=== $b)
{
	echo "true";
}
else
{
	echo "false";
}

define("Greetings","Welcome To Dhaka Shohor");
echo Greetings;

phpinfo();

var_dump($a);

$val=print($a);
echo $val;

$abc=[4];
$xyz=array(4);
$student=['name'=>'wakib','id'=>'17-33699-1'];
echo $student['id'];
echo $abc[0];

$students = [ 
					['alamin', 'webtech', 3.6], 
					['Xyz', 'Data Structure', 3.0], 
					['abc', 'atp-3', 2.1], 
					['pgr', 'ICS', 1.5] 
			];

echo $students[2][2];

$students = [ 
					's1'=> ['name'=>'alamin', 'course'=> 'webtech', 'cgpa'=>3.6], 
					's2'=> ['name'=>'Xyz', 'course'=> 'Data Structure', 'cgpa'=>3.0], 
					's3'=> ['name'=>'abc', 'course'=> 'atp-3', 'cgpa'=>2.1], 
					's4'=> ['name'=>'pgr', 'course'=> 'ICS', 'cgpa'=>1.5] 
			];

echo $students['s3']['course'];

/*function sum1($a=0,$b=0)
{
	return $a+$b;
}
echo sum1();*/

for ($i=0;$i<5;$i++)
{
	echo "webtech"."<br>";
}

$xyz1="Welcome To Dhaka";

echo $_GET['name'];
print_r($_GET)

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test Page</title>
</head>
<body>

	<h1> This Is a Html Content: <?php print($xyz1) ?> </h1>

</body>
</html>