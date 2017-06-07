<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php 
	
	$names1 = array("Kobe","Shaq","Robert","Derek","Rick");
	$names2 = array(" Bryant"," O'neal"," Horry"," Fisher"," Fox");

 ?>

 <ul>
 	<li><?php echo $names1[0]; ?></li>
 	<li><?php echo $names1[1]; ?></li>
 	<li><?php echo $names1[2]; ?></li>
 	<li><?php echo $names1[3]; ?></li>
 	<li><?php echo $names1[4]; ?></li>
 </ul>

 <?php 
 echo "<ul>
 	   	 <li>".$names2[0]."</li>
 	   	 <li>".$names2[1]."</li>
 	   	 <li>".$names2[2]."</li>
 	   	 <li>".$names2[3]."</li>
 	   	 <li>".$names2[4]."</li>
	  </ul>"
  ?>

<?php  
echo 
'<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Names 1</th>
				<th>Names 2</th>
			</tr>
		</thead>
		<tbody>	
			<tr>
				<td>'.$names1[0].'</td>
				<td>'.$names2[0].'</td>
			</tr>
				<td>'.$names1[1].'</td>
				<td>'.$names2[1].'</td>
			</tr>
				<td>'.$names1[2].'</td>
				<td>'.$names2[2].'</td>
			</tr>
				<td>'.$names1[3].'</td>
				<td>'.$names2[3].'</td>
			</tr>
				<td>'.$names1[4].'</td>
				<td>'.$names2[4].'</td>
			</tr>
		</tbody>		
	</table>
</div>';
?>


<?php 
// $string = "the quick fox jumps over the lazy brown dog.";

$string = "the lazy brown fox.";
//output: the quick brown fox.

echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";
echo ucfirst($string)."<br>";
echo ucwords($string)."<br>";

echo strpos($string,'brown');
echo '<br>';
echo strrev($string);

echo "<br>";
echo "<br>";


$word = "Racecar";
$lower = strtolower($word);
$reversed = strrev($lower);


if ($lower == $reversed)
{
	echo "Palindrome";
} else {
	echo "Not a Palindrome";
}

echo "<br>";

echo substr($string, 4);


echo "<br>";

$brown = strpos($string,'brown');
echo substr($string, $brown);

echo "<br>";


// echo substr($string, 0,4) ."quick ". substr($string, strpos($string,'brown'));


$asan = strpos($string, "brown fox");
echo substr($string,0,$asan);
echo "quick ". substr($string,$asan);


echo "<br>";

$ab = 3;
$bc = 4;


echo sqrt(pow($ab,2) + pow($bc,2));

$a = 4;
$b = 3;

// echo "<br>";
// echo "A = ". (--$a);
// echo "<br>";
// echo "B = ". (++$b);

echo "<br>";


$temp = $a; //4
$a = $b; // 3
$b = $temp;// 4


echo 'A = '. $a . "<br>". 'B = '. $b;

//sum, difference, product, quotient, remainder
// echo "<br>";
// echo 'A = 4';
// echo "<br>";
// echo 'B = 3';
// echo "<br>";
// echo "A + B = ". ($a += $b);
// echo "<br>";
// echo "A - B = ". ($a -= $b);
// echo "<br>";
// echo 'A * B = '. ($a * $b);
// echo "<br>"; 
// echo 'A / B = '. (number_format($a / $b, 2));
// echo "<br>";
// echo 'A % B = '. ($a % $b);
// echo "<br>";
// echo '++B = '. (++$b);
// echo "<br>";
// echo '--A = '. (--$a);

// echo "<br>";
// echo 
// 	 "A = 4 <br>
// 	  B = 3 <br>
// 	  A + B = ". ($a + $b) . "<br>". 
// 	 "A - B = ". ($a - $b) . "<br>". 
// 	 "A * B = ". ($a * $b) . "<br>". 
// 	 "A / B = ". number_format($a / $b, 2) . "<br>". 
// 	 "A % B = ". ($a % $b) . "<br>". 
// 	 "++B = " . (++$b) . "<br>". 
// 	 "--A = ". (--$a);

echo "<br><br>";

$grades = array(93,90,88,95,100,75);

echo count($grades);

echo "<br><br>";

echo number_format(array_sum($grades) / count($grades),2);



echo "<br><br>";

//Odd Even Test

$a = 22;

echo 'A = '. $a;
echo "<br>";
if($a % 2 == 0 AND $a % 3 == 0)
{
	echo "Even Multiple of 3";

}
elseif($a % 2 > 0 AND $a % 3 == 0)
{
	echo "Odd Multiple of 3";
}
else
{
	echo "Not a multiple of 3";
}


// Days of the Week

echo "<br>";

$day = 22;

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

if($day % 7 - 1 >= 0)
{
	echo $days[($day % 7) - 1];
}else{
	echo $days[($day % 7) + (count($days)-1)]; //Sunday
}

?>
</table>
</body>
</html>