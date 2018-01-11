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
		$a = "php string";
		$b = "my name is ratin";
		$c = "this is my php";
		$d = "i love php";
		$e = "i love php";


		echo strlen($a)."<br>";//to find a string length;
		echo str_word_count($b)."<br>";//to find word length;
		echo strrev($c)."<br>";//reverse a string;
		echo strpos($d, "love")."<br>";//to find a string position
		echo str_replace("php","java", $d)."<br>";//to find a string position

?>



	</section>





	<div class="footer" id="show">

		<h2>this is footer</h2>
	</div>

</section>


</body>
</html>
