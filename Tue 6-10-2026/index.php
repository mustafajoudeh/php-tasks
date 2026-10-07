<?php
//Array
//1.
$colors = array('white', 'green', 'red');

sort($colors);

echo "<ul>";

foreach ($colors as $color) {
    echo "<li>$color</li>";
}

echo "</ul>";

//2.

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);

foreach($cities as $Key=>$Value) {
    echo "The capital of $Key is $Value <br>";
}

//3.

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo "<br>". reset($color);

//4.

$numbers = array(1, 2, 3, 4, 5 );

array_splice($numbers,3,0,"$");

foreach($numbers as $num)
{
 echo "<br>".$num;
}


//5. Write a PHP script to sort the following associative array depending on the key value [asc] :

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

foreach($fruits as $Key=>$value)
{
 echo "<br>".$Key ." => ".$value;
}


//6. Write a PHP script to calculate and display the average temperature for the recorded reads, also the
//script should display the list of the five lowest and the five highest temperatures 


$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73);
$Sum = 0;

foreach($temperatures as $T)
{
$Sum+=$T;
}

    $Avg = $Sum/count($temperatures);;

    echo "<br>Average Temperature is: {$Avg}<br>";

    sort($temperatures);

$lowest = array_slice($temperatures, 0, 5);
$highest = array_slice($temperatures, -5);

echo "Five lowest temperatures: ";
echo implode(", ", $lowest);

echo "<br>";

echo "Five highest temperatures: ";
echo implode(", ", $highest);


//7. Write a PHP program to merge the following two arrays.
//Sample Input:

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array3 = array_merge($array1,$array2);

echo "<br>";

print_r($array3);

//8. Write a PHP function to change the following array's and convert all the strings to upper case.

$colors = array("red", "blue", "white", "yellow");

foreach ($colors as $key => $color) {
    $colors[$key] = strtoupper($color);
}

echo "<br>";

print_r($colors);

?>