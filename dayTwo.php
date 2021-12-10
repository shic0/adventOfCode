<?php

$horizontal_position = 0;
$depth = 0;

$fh = fopen('input_2.txt','r');
while ($line = fgets($fh)) {

    $movement = preg_split('/\s+/', $line, -1, PREG_SPLIT_NO_EMPTY);
    $distance = (int)$movement[1];
    $direction = $movement[0];    
    
    if($direction == "forward"){
        $horizontal_position = $horizontal_position + $distance;
        /*  $horizontal_position += $distance; */ 
    }
    else if($direction == "down") {
        $depth = $depth + $distance;
    }
    else if($direction === "up") {
        $depth = $depth - $distance;
        if($depth < 0){
            echo ('boat is flying high!');
            $depth = 0; 
        }
    }
}
fclose($fh);

// for ($i = 0; $i < count($movements); $i++ ) {
//     $movement = preg_split('/\s+/', $movements[$i], -1, PREG_SPLIT_NO_EMPTY);
//     $distance = (int)$movement[1];
//     $direction = $movement[0];
//     var_dump($direction);
    
    
//     if($direction == "forward"){
//         $horizontal_position = $horizontal_position + $distance;
//         /*  $horizontal_position += $distance; */
        
//     }
//     else if($direction == "down") {
//         $depth = $depth + $distance;
//     }
//     else if($direction === "up") {
//         $depth = $depth - $distance;
//         if($depth < 0){
//             echo ('boat is flying high!');
//             $depth = 0; 
//         }
//     }
// }

$whereWeAre = $depth * $horizontal_position;
var_dump($whereWeAre);
