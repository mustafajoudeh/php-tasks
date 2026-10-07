<?php

// ======================================================
// 1. Check if the sum of two numbers equals 30
// ======================================================

function checkSum($firstInteger, $secondInteger)
{
    $sum = $firstInteger + $secondInteger;

    if ($sum == 30) {
        return $sum;
    }

    return false;
}

$result = checkSum(10, 10);

echo "1. Sum Result: ";
var_dump($result);

echo "<br><br>";


// ======================================================
// 2. Check if a number is a multiple of 3
// ======================================================

function isMultipleOf3($number)
{
    if ($number % 3 == 0) {
        return true;
    }

    return false;
}

$result = isMultipleOf3(20);

echo "2. Multiple of 3: ";
var_dump($result);

echo "<br><br>";


// ======================================================
// 3. Check if number is in range [20-50]
// ======================================================

function isInRange($number)
{
    if ($number >= 20 && $number <= 50) {
        return true;
    }

    return false;
}

$result = isInRange(50);

echo "3. Number in range: ";
var_dump($result);

echo "<br><br>";


// ======================================================
// 4. Find the largest number between three integers
// ======================================================

function findLargest($a, $b, $c)
{
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

echo "4. Largest Number: ";
echo findLargest(1, 5, 9);

echo "<br><br>";


// ======================================================
// 5. Calculate monthly electricity bill
// ======================================================

function calculateBill($units)
{
    $bill = 0;

    if ($units <= 50) {

        $bill = $units * 2.50;

    } elseif ($units <= 150) {

        $bill = (50 * 2.50)
              + (($units - 50) * 5.00);

    } elseif ($units <= 250) {

        $bill = (50 * 2.50)
              + (100 * 5.00)
              + (($units - 150) * 6.20);

    } else {

        $bill = (50 * 2.50)
              + (100 * 5.00)
              + (100 * 6.20)
              + (($units - 250) * 7.50);
    }

    return $bill;
}

echo "5. Electricity Bill: ";
echo calculateBill(300) . " JOD";

echo "<br><br>";


// ======================================================
// 6. Calculator
// ======================================================

function calculator($num1, $num2, $operator)
{
    switch ($operator) {

        case '+':
            return $num1 + $num2;

        case '-':
            return $num1 - $num2;

        case '*':
            return $num1 * $num2;

        case '/':
            if ($num2 == 0) {
                return "Cannot divide by zero";
            }

            return $num1 / $num2;

        default:
            return "Invalid operator";
    }
}

echo "6. Calculator Result: ";
echo calculator(10, 5, '+');

echo "<br><br>";


// ======================================================
// 7. Check voting eligibility
// ======================================================

function checkVotingEligibility($age)
{
    if ($age >= 18) {
        return "is eligible to vote";
    }

    return "is not eligible to vote";
}

echo "7. Voting Eligibility: ";
echo checkVotingEligibility(15);

echo "<br><br>";


// ======================================================
// 8. Check if number is positive, negative or zero
// ======================================================

function checkNumber($number)
{
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

echo "8. Number Type: ";
echo checkNumber(-60);

echo "<br><br>";


// ======================================================
// 9. Calculate student's grade
// ======================================================

function calculateGrade($scores)
{
    $sum = 0;

    foreach ($scores as $score) {
        $sum += $score;
    }

    $average = $sum / count($scores);

    if ($average >= 90) {
        return "A";
    } elseif ($average >= 80) {
        return "B";
    } elseif ($average >= 70) {
        return "C";
    } elseif ($average >= 60) {
        return "D";
    } else {
        return "F";
    }
}

$scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

echo "9. Student Grade: ";
echo calculateGrade($scores);

?>

