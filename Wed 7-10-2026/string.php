
<?php

// 1. Put a string in an array and use var_dump()
echo "Question 1:<br>";

$string = "Twinkle, twinkle, little star.";
$array = explode(" ", $string);

var_dump($array);

echo"<br>";

// 2. Print the next letter
echo "Question 2:<br>";

$char = 'a';

if ($char == 'z') {
    echo 'a';
} else {
    echo chr(ord($char) + 1);
}

echo"<br>";


// 3. Insert a string at a specified position
echo "Question 3:<br>";

$original = "The brown fox";
$result = str_replace("The brown", "The quick brown", $original);

echo $result;

echo"<br>";

// 4. Get the first word of a sentence
echo "Question 4:<br>";

$sentence = "The quick brown fox";
$words = explode(" ", $sentence);

echo $words[0];

echo"<br>";

// 5. Remove leading zeroes
echo "Question 5:<br>";

$number = "0000657022.24";

echo ltrim($number, "0");

echo"<br>";


// 6. Remove trailing dashes
echo "Question 6:<br>";

$string = "The quick brown fox jumps over the lazy dog---";

echo rtrim($string, "-");

echo"<br>";

// 7. Select the first five words
echo "Question 7:<br>";

$string = "The quick brown fox jumps over the lazy dog";
$words = explode(" ", $string);
$firstFive = array_slice($words, 0, 5);

echo implode(" ", $firstFive);

echo"<br>";

// 8. Remove commas from a numeric string
echo "Question 8:<br>";

$number = "2,543.12";

echo str_replace(",", "", $number);
echo"<br>";


?>