<!DOCTYPE html>
<html>
<head>
	<title>javascript</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="content">
	<div class="hared"><h1>PHP FUNDAMENTAL BY RATIN</h1></div>


	<section class="main">

<?php
	$x = 5;//here = is assigment oporator
	$y = 2;
	echo $x+$y;//arithmetic oporator

	$a = 100;
	$b = "100";
	var_dump($a == $b);//its only check the value
	var_dump($a === $b);//its check the data type

	$c = 5;
	echo ++$c."<br>";//its mean (5+1)
	$d = 8;
	echo $d++."<br>";
	echo $d."<br>";//here he get the value
	//this will same as dicrement

	$f = 40;
	$g = 50;
	if($f == 40 & $g == 50) //here &(and) is logicial operator
	{
		echo "two statement are true"."<br>";
	}
	else      //and er somoy 2ty true hote hobe
	{
		echo "amy of those condition is flase"."<br>";
	}


	if($f == 40 and/*and delao hoy*/ $g == 60) //here &(and) is logicial operator
	{
		echo "two statement are true"."<br>";
	}
	else
	{
		echo "amy of those condition is flase"."<br>";
	}



	//or:=

	if($f == 40 or $g == 70) //here or(||) is logicial operator
	{
		echo "two statement are true"."<br>";
	}
	else   //or er somoy 1te true holay hobe
	{
		echo "amy of those conditin is flase"."<br>";
	}


	if($f == 40 xor $g == 50) //here xor is logicial operator
	{
		echo "two statement are true"."<br>";
	}
	else //Xor er kaj holo 2ta true hole hobe na ja kono 1ta true hote hobe always
	{
		echo "amy of those conditin is flase"."<br>";
	}


	if($f !== 40) //here &(and) is logicial operator
	{
		echo "two statement are true"."<br>";
	}
	else
	{
		echo "amy of those conditin is flase"."<br>";
	}



	//String operator:=[this is only for string]

	$h = "my name";
	$j = " RATIN";
	$k = $h.$j; //concatationation operator
	echo $k."<br>";
	$h .=$j;//concatationation assaigment operator
	echo $h."<br>"; 


	//array operator:=

	$z = array("a"=>"mango",
				"b"=>"banna"

);
	$x = array("c"=>"mango",
				"d"=>"banna"
	);

	var_dump($z+$x);

	$q = array("mango","banna","apple");
	echo $q[2];

?>



	</section>





	<div class="footer" id="show">

		<h2>this is footer</h2>
	</div>

</section>


</body>
</html>
