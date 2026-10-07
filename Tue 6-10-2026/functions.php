<?php

//1. Write a PHP script to check if the inserted number is a prime number

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$num = 8;

if (isPrime($num)) {
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}

echo "<br>";

//2. Write a PHP script to reverse a string

$string = "remove";

$reversed = strrev($string);

echo $reversed;


//3. Write a PHP function to swap to variables

function Swap(&$num1,&$num2)
{
    $temp=$num1;
    $num1=$num2;
    $num2 =$temp;

}

$num1 = 10;
$num2 = 20;

echo"<br>";
echo "num1 = {$num1} , num2 = {$num2}";

Swap($num1,$num2);
echo"<br>";

echo "num1 = {$num1} , num2 = {$num2}";

echo"<br>";


//Write a PHP function to check if a number is an Armstrong number or not



function IsArmstrongNumber($num)
{
    $original = $num;
    $sum = 0;
    $digits = strlen((string)$num);

    while ($num > 0) {
        $digit = $num % 10;
        $sum += pow($digit, $digits);
        $num = intdiv($num, 10);
    }

    return $sum == $original;

}

$num = 153;

if (IsArmstrongNumber($num)) {
    echo "$num is an Armstrong number";
} else {
    echo "$num is not an Armstrong number";
}

echo "<br>";

//5. Write a PHP function that checks whether a passed string is a palindrome or not

function isPalindrome($string)
{
    $string = strtolower($string);

    $string = preg_replace("/[^a-z0-9]/", "", $string);

    return $string == strrev($string);
}

$text = "Eva, can I see bees in a cave?";

if (isPalindrome($text)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}

echo"<br>";

//6. Write a PHP function to remove duplicates from an array


function removeDuplicates($array)
{
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);

$array1 = removeDuplicates($array1);

print_r($array1);
