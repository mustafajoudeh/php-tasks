<?php

// ==========================================================
// 1. String Case Functions
// ==========================================================

echo "<h2>1. String Functions</h2>";

$string = "hello world from orange coding academy";


// a. Convert string to uppercase

echo "Uppercase: ";
echo strtoupper($string);

echo "<br>";


// b. Convert string to lowercase

echo "Lowercase: ";
echo strtolower($string);

echo "<br>";


// c. Make first letter uppercase

echo "First letter uppercase: ";
echo ucfirst($string);

echo "<br>";


// d. Make first letter of each word uppercase

echo "First letter of each word uppercase: ";
echo ucwords($string);

echo "<br><br>";


// ==========================================================
// 2. Convert numeric string to date/time format
// ==========================================================
//
// Input: 085119
// Output: 08:51:19

echo "<h2>2. Convert String to Time</h2>";

$time = "085119";

$hour = substr($time, 0, 2);
$minute = substr($time, 2, 2);
$second = substr($time, 4, 2);

echo $hour . ":" . $minute . ":" . $second;

echo "<br><br>";


// ==========================================================
// 3. Check whether sentence contains a specific word
// ==========================================================

echo "<h2>3. Search for a Word</h2>";

$sentence = "I am a full stack developer at orange coding academy";

$word = "Orange";

if (stripos($sentence, $word) !== false) {

    echo "Word Found!";

} else {

    echo "Word Not Found!";
}

echo "<br><br>";


// ==========================================================
// 4. Extract file name from URL
// ==========================================================

echo "<h2>4. Extract File Name</h2>";

$url = "www.orange.com/index.php";

$fileName = basename($url);

echo $fileName;

echo "<br><br>";


// ==========================================================
// 5. Extract username from email
// ==========================================================

echo "<h2>5. Extract Username</h2>";

$email = "info@orange.com";

$username = strstr($email, "@", true);

echo $username;

echo "<br><br>";


// ==========================================================
// 6. Get the last three characters
// ==========================================================

echo "<h2>6. Last Three Characters</h2>";

$string = "info@orange.com";

$lastThree = substr($string, -3);

echo $lastThree;

echo "<br><br>";


// ==========================================================
// 7. Generate Random Password
// ==========================================================
//
// Do NOT use rand().
// random_int() is used instead.

echo "<h2>7. Random Password</h2>";

$characters =
    "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

$password = "";

for ($i = 0; $i < 10; $i++) {

    $index = random_int(
        0,
        strlen($characters) - 1
    );

    $password .= $characters[$index];
}

echo $password;

echo "<br><br>";


// ==========================================================
// 8. Replace the first word
// ==========================================================

echo "<h2>8. Replace First Word</h2>";

$sentence = "Our new trainee is so genius.";

$newWord = "The";

$sentence = preg_replace(
    '/^\w+/',
    $newWord,
    $sentence
);

echo $sentence;

?>