<?php

$horizontal_position = 0;
$depth = 0;
$aim = 0;

$fh = fopen('input.txt','r');

while ($line = fgets($fh)) {
    /* $movement = preg_split('/\s+/', $example_array[$i], -1, PREG_SPLIT_NO_EMPTY); */
    $movement = preg_split('/\s+/', $line, -1, PREG_SPLIT_NO_EMPTY);
    $distance = (int)$movement[1];
    $direction = $movement[0];    
    
    if($direction == "forward"){
        $horizontal_position = $horizontal_position + $distance;
        $depth = $depth + ($aim * $distance);
    }
    else if($direction == "down") {
       // down also increases + AIM by Direction units
        $aim = $aim + $distance;
    }
    else if($direction === "up") {
        // Up also decreases AIM by Direction units
        $aim = $aim - $distance; 
        if($depth < 0){
            echo ('boat is flying high!');
            $depth = 0; 
        }
    }
}
fclose($fh);

$whereWeAre = $depth * $horizontal_position;
var_dump($whereWeAre);


// Hämtar datan och delar upp den på ett annat sätt 
// for ($i = 0; $i < count($movements); $i++ ) {
//     $movement = preg_split('/\s+/', $movements[$i], -1, PREG_SPLIT_NO_EMPTY);
//     $distance = (int)$movement[1];
//     $direction = $movement[0];
//     var_dump($direction);
        

