<?php
$arr = range(0, 100);
shuffle($arr );
$arr = array_slice($arr ,0,10);

echo("initial: " . "\n");
print_r($arr);

$arrSize = count($arr);
for ($i = 0; $i < $arrSize; $i++) {
    for ($j = 1; $j < $arrSize - $i; $j++) {
        if($arr[$j - 1] > $arr[$j]) {
            $temp = $arr[$j - 1];
            $arr[$j - 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
echo("sorted: " . "\n");
print_r($arr);