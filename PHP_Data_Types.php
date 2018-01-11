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
$a = "my NAME is ratin";
$b = 5;
$c = 5.6;
$d = 6.56;
$e = true;
$f = array("mango","apple","pineapple","sweet");

class student
{
  function dep()
  {
  return "bangla";
  }

  function details()
  {
    echo $this->dep();
  }
}

$st = new student();


$g = null;

echo $a."<br>";//string
echo $b."<br>";//integer
echo $c."<br>";//double
echo $d."<br>";//double
echo $e."<br>";//boolean
echo $f."<br>";//array
$st->details();//object
echo $g;//null


 ?>




	</section>





	<div class="footer" id="show">

		<h2>this is footer</h2>
	</div>

</section>


</body>
</html>
