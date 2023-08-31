<?php

// ........pyramind........//

for ($i = 1; $i <= 6; $i++) {
	for($k = 1; $k <= 6 - $i; $k++){
		echo " &nbsp;&nbsp;";
	}
	for ($j = 1; $j <= $i; $j++) {
		echo '&nbsp; * &nbsp;';
	}
	echo "</br>";
}
for ( $i = 6; $i >= 1; $i--){
	for( $j = 6; $j >= $i+1; $j--){
		echo " &nbsp;&nbsp;";
	}
		for ($k = 1; $k <= $i; $k++) {
			echo '&nbsp; * &nbsp;';
		}
	echo "</br>";
}
echo "</br>";

// ........simple .......//

for ($i = 0; $i <= 5; $i++) {
	for ($j = 0; $j <= $i; $j++) {
		echo '&nbsp; * ';
	}
	echo "</br>";
}
for ($i = 6; $i >=1; $i--){
	for( $j = 1; $j <= $i; $j++){
		echo '&nbsp; * ';
	}
	echo "</br>";
}
echo "</br>";

// .......box.......//

echo '<div class="box">';
	for ($i = 0; $i < 7; $i++) { // row print 
		echo '<div class="row">';
		for($j = 0; $j < 7; $j++){
			echo '&nbsp; * ';
		}
		echo "</br>";
		echo "</div>";
	}
echo "</div>";
echo "</br>";

for( $i = 5; $i >= 1; $i--){
	for( $j = 1; $j <= $i; $j++ ){
		echo $i;
	}
	echo "</br>";
}
echo '</br>';
echo '</br>';

// ....... fibonacci .........//

// $num = 0;
// $n1 = 0;
// $n2 = 1;

// echo $n1 .' '. $n2;

// while( $num < 5){
	// $n3 = $n1 + $n2; 
	// echo $n3 .'</br>';
	// $n1 = $n2;      
	// $n2 = $n3;      
	// $num = $num + 1; 
	// echo '</br>';
	// print_r($n1 = $n2); 
// }

// ..... if...elseif ..... //

// Conditions:

// If marks are 60% or more, grade will be First Division.
// If marks between 45% to 59%, grade will be Second Division.
// If marks between 33% to 44%, grade will be Third Division.
// If marks are less than 33%, student will be Fail.

$marks = 35;

if ( $marks>=60){
	echo "First Division";
}elseif ( $marks>=45 ) {
	echo "Second Division";
}elseif ( $marks>=33 ) {
	echo "Third Division";
}else {
	echo "Failed";
}

echo '</br>';
echo '</br>';
// Conditions:

// You can pass 1 to 7 number in switch
// Day 1 will be considered as Monday
// If number is not between 1 to 7, show invalid number in default

$day = 6;

switch ( $day ){
	case 1: 
		echo "it's monday";
		break;
	case 2:
		echo "it's tuesday";
		break;
	case 3:
		echo "it's wednesday";
		break;
	case 4:
		echo "it's thursday";
		break;
	case 5: 
		echo "it's friday";
		break;
	case 6:
		echo "it's saturday";
		break;
	case 7:
		echo "it's sunday";
		break;
	default:
		echo "Invalid Day";
}
echo '</br>';
echo '</br>';

// Write a PHP script using a for loop to add all the integers between 0 and 20 and display the sum

$a = 0;
for ($x=1; $x<=20; $x++){
	$a +=$x;
}
echo $a.'</br></br>';

// Write a PHP Script to sum of even numbers from 1 to 10

$number = 0;
$total = 0;
while ( $number<=10 ){
	
	if( $number % 2 == 0 ){
		$total = $number+$total;
	}
	$number++;
}
echo $total;
// echo $number;
 echo '<br>';
 echo '<br>';
 
$my_arr = [2,2,3,4,6,92,657,54,432,324];
$find = [];
$find = $my_arr;
echo min($find).'</br>';
echo max($find);


$numbers = array(15,17,40,22,1,54);
$length = count($numbers);
$min = $numbers[0];
echo '</br>'.$min;

for($i=1;$i<$length;$i++)
	{
		if($numbers[$i]<$min)
		{
		$min=$numbers[$i];
		}
	}
echo "The smallest number is ".$min;
