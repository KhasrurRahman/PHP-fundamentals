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
	
//there are about 100+ BUILDin function in PHP.for this php is so powerful

function school($name="my achool is good",$year="1900")
{
	echo "$name is a good school,"."it start in $year<br>";
}

school("satkhira govt school","1990");
school("satkhira govt collage","1980");
school("satkhira govt pean","1970");
school();



function sum($x,$y)
{
	$z=$x+$y;
	return $z;
}

echo "the sum is= ".sum(5,10);

?>



	</section>





	<div class="footer" id="show">

		<h2>this is footer</h2>
	</div>

</section>


</body>
</html>
