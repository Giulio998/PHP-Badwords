<?php 
$text = $_GET["text"];
$censured = $_GET["censured"];

echo "<p>Testo originale:</p>";

echo $text ;

$noSpaceText = str_replace(' ', '', $text);

$textLength = strlen($noSpaceText);



echo "<p>caratteri:</p>" . $textLength . "<br>"; 

$replacer = ("***");

$newText = str_replace($censured,$replacer,$text);

echo "<p>Testo modificato:</p>";

echo $newText ;

$noSpaceNewText = str_replace(' ', '', $newText);

$newTextLength = strlen($noSpaceNewText);

echo "<p>caratteri:</p>" . $newTextLength . "<br>";

$differenceLength = (abs($textLength - $newTextLength));

$censuredLength = strlen($censured);

$replacerLength = strlen($replacer);

$differenceWordLength =(abs($censuredLength - $replacerLength));

$numberOfCensure = ($differenceLength / $differenceWordLength);

echo "<p>sostituzioni:</p>" . $numberOfCensure;

?>



