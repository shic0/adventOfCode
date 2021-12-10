<?php

/* $array = [
    "00100",
    "11110",
    "10110",
    "10111",
    "10101",
    "01111",
    "00111",
    "11100",
    "10000",
    "11001",
    "00010",
    "01010",
]; */
                   
$fh = fopen('input3.txt','r');
$sumArray = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
$gamma = "";

while ($row = fgets($fh)) {
/* foreach($array as $row){ */
    $sliced_row = preg_split('//', $row, -1, PREG_SPLIT_NO_EMPTY);
    /* var_dump($sliced_row); */
    //   foreach($sliced as $singleNumber) {
        
    for ($i = 0; $i < count($sumArray); $i++ ) {
        $sumArray[$i] = $sumArray[$i] + $sliced_row[$i];
    }

   
   
  /*   var_dump($sliced_row); */
}

fclose($fh);


/* var_dump($sumArray); */  
for($i = 0; $i > count($); $++ ){
if($sumArray[$i] > 500) {
        $binary = 1;
} else {
        $binary = 0;
}
$gamma = $gamma . $binary;
var_dump($one, $zero);
}

$powerConsumption = $gammaRate * $epsilonRate;
/* $num = 123456; 
$chars = preg_split('//', $num, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars); */
// 521,321,321,461,623,613
// 100011 => gamma_decimal?
// 011100 => episol_decimal?

// gamma_decimal x epislon_decimal

