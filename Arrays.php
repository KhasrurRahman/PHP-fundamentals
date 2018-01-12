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
	//indexed array:-
	$a = array(1,2,3,4,5,6,7,8,9);
	echo count($a);//to find the array length

	$length = count($a);

	for($i=0;$i<$length;$i++)
	{
		echo $a[$i];
		echo "<br>";
	}



	//assoseative array:-

	$age = array("korim"=>"25","ratin"=>"34","fatema"=>"56");//alter vator akta store kore daoakay bole asoceative array

	foreach($age as $x=>$value)
	{
		echo "key=$x value=$value";
		echo "<br>";
	}

	//multidimentational array:-
	
	$cars = array(
		array("volvo",23,24),
		array("bmw",24,67),
		array("honda",54,64),
		array("ode",54,55),
	);
	
	for($row=0; $row<3; $row++)
	{
		echo "<p>row number $row</p>";
		echo "<ul>";
		
		for($cel=0; $cel<3; $cel++)
		{
			echo "<li>".$cars[$row][$cel]."<li>";
		}
		echo "</ul>";
	}
	
	
	


?>



	</section>





	<div class="footer" id="show">

		<h2>this is footer</h2>
	</div>

</section>


</body>
</html>
