
<?php

// 1. Fibonacci Sequence
echo "Question 1: Fibonacci\n";

$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    echo $first;

    if ($i < 9) {
        echo ", ";
    }

    $next = $first + $second;
    $first = $second;
    $second = $next;
}


// 2. Floyd's Triangle
echo "\n\nQuestion 2: Floyd's Triangle\n";

$n = 5;
$num = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }

    echo "\n";
}


// 3. Letter Pattern
echo "\nQuestion 3: Letter Pattern\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }

    echo "\n";
}

for ($i = 4; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }

    echo "\n";
}

?>