<?php 

$myName = 'Andrea';
$mySurname = 'Perna';

echo $myName;
echo $mySurname;

// The . is use for concatenation ( sticking things together)
echo '<p>My name is ' . $myName . '</p>';

// Variable interpolation
echo "<p>My surname is $mySurname </p>";

// HERDOC string
$shortStory = <<<STORY
<p> There once was a man from Peru, who dremt ... </p>
<p> Ho woke up in the middle of the night </p>
STORY;
echo $shortStory;

// Fun with data types
$anInt = 29;
echo "<p>The value is $anInt, type is " . gettype($anInt) . '<p/>';

$aFloat = 29.2;
echo "<p>The value is $aFloat ". gettype($aFloat) . '<p/>';
// Boolean
$raining = false;
echo "<p>The value is $raining" . gettype($raining) . '</p>';

// Using Arrays
$names = ['Valentino','Olga','Warren','Daniel'];
print_r($names);

$comapny = ['CEO'=>'Alice Anderson','CTO'=>'Bob Parker'];
echo '<p>Company executives</p>';
print-r ($company);

// Type cohersion

$val1 = 89;
$val2 = "41";

// Type coercion
$val3 = $val1 + $val2;
echo "<p>The result is $val3</p>";

// Type casting
$val4 = 21;
$val5 = 56,32;
$val6 = (int) $val4 + (int) $val5;
echo "<p>The next result is $val6</p>"




