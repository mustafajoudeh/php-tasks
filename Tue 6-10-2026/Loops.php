<?php

// ==========================================================
// 1. Display 1-2-3-4-5-6-7-8-9-10
// ==========================================================

echo "<h2>1. Numbers from 1 to 10</h2>";

for ($i = 1; $i <= 10; $i++) {

    echo $i;

    if ($i < 10) {
        echo "-";
    }
}

echo "<br><br>";


// ==========================================================
// 2. Add all integers between 0 and 30
// ==========================================================

echo "<h2>2. Sum from 0 to 30</h2>";

$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total = " . $total;

echo "<br><br>";


// ==========================================================
// 3. Nested For Loop - Pattern
// ==========================================================



echo "<h2>3. Nested Loop Pattern</h2>";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        if ($i == 5) {
            echo "E";
        } elseif ($j <= 5 - $i) {
            echo "A";
        } else {
            echo chr(64 + $i);
        }
    }

    echo "<br>";
}

echo "<br><br>";


// ==========================================================
// 4. Nested For Loop - Pattern
// ==========================================================



echo "<h2>4. Nested Loop Pattern</h2>";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        if ($i == 5) {
            echo "5";
        } elseif ($j <= 5 - $i) {
            echo "1";
        } else {
            echo $i;
        }
    }

    echo "<br>";
}

echo "<br><br>";


// ==========================================================
// 5. Diagonal Pattern
// ==========================================================
//
// Expected:
//
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5

echo "<h2>5. Diagonal Pattern</h2>";

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0 ";
        }
    }

    echo "<br>";
}

echo "<br>";


// ==========================================================
// 6. Factorial
// ==========================================================

echo "<h2>6. Factorial</h2>";

$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {

    $factorial *= $i;
}

echo $number . "! = " . $factorial;

echo "<br><br>";


// ==========================================================
// 7. HTML Table using For Loops
// ==========================================================
//
// The exact table content is not visible in the extracted
// PDF text, so the table structure is not assumed.

echo "<h2>7. HTML Table</h2>";

for ($i = 1; $i <= 6; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        echo "$i * $j = " . ($i * $j);

        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    echo "<br>";
}

echo "<br><br>";


?>