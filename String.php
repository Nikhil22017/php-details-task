<?php
$message = "Hello World! Welcome to PHP string functions.";
echo "Original Message: " . $message . "<br>";

//find length of the string
$length = strlen($message);
echo "<br>The length of the string is:" . $length,"<br>";


//find position of a substring hello
$position = strpos($message, "Hello");
echo "<br>The position of 'Hello' in the string is:" . $position ,"<br>";

//replace occurrence of a substring World with Universe
$newMessage = str_replace("World", "Universe", $message);
echo "<br>The new message is: " . $newMessage,"<br>";

//convert the string to uppercase
$upperMessage = strtoupper($message);
echo "<br>The uppercase message is: " . $upperMessage,"<br>";

//convert the string to lowercase
$lowerMessage = strtolower($message);
echo "<br>The lowercase message is: " . $lowerMessage,"<br>";

//capitalize the first letter of each word
$capitalizedMessage = ucwords($message);
echo "<br>The capitalized message is: " . $capitalizedMessage,"<br>";

//captialize the first letter of the string
$capitalizedFirstLetter = ucfirst($message);
echo "<br>The message with the first letter capitalized is: " . $capitalizedFirstLetter,"<br>";

//remove whitespace from the beginning and end of the string
$trimmedMessage = trim($message);
echo "<br>The trimmed message is: '" . $trimmedMessage . "'";
?>