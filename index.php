<?php

// Premiere ligne
$a = 50;
$b = 10;

if($a > $b){
    echo "Hello World!";
}

//Deuxieme ligne
if(!($a === $b)) {
    echo "<br><br>Hello World2";
}

//Troisieme ligne
if($a==$b){
    echo "<br><br>Oui";
}
else
{
    echo "<br><br>Non";
}


//Quatrieme ligne
echo"<br><br>";
if($a === $b) {
    echo "1";
}
elseif ($a > $b) {
    echo "2";
}
else
{
    echo "3";
}


//Cinquieme ligne
echo"<br><br>";

$color = 'red';

switch($color) {
    case "red":
        echo "Hello";
    break;
    case "green":
        echo "Welcome";
}

// - 6 -
echo"<br><br>";

$color = 'blue';
if(!($color === 'green' && $color === 'red')){
    echo "ni red ni green";
}
