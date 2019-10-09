<?php
echo "Van welk cijfer wil je de faculteit weten?\n";
$input = readline();
$factor = 1;
$uitkomst = 1;
while ($factor <= $input) {
    $factor++;
    $uitkomst = $uitkomst * $factor;        
}

echo "De uitkomst is: ".$uitkomst;