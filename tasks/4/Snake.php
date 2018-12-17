<?php
$default = 3;
$shortOpt = 'b:';
$longOpt = ['base:'];
$cliVar = array_values(getopt($shortOpt, $longOpt))[0];
$cli = $cliVar ?: $argv[1];
$base = $cli ?: $default;
$arr = array();
for($i = 0; $i < $base ** 2; $i++) {
    $div = intdiv($i, $base);
    $arr[$div][] = $i + 1;
}
for ($i = 0; $i < $base; $i++) {
    if ($i % 2) {
        $arr[$i] = array_reverse($arr[$i]);
    }
}
for ($j = 0; $j < $base; $j++) {
    for ($k = 0; $k < $base; $k++) {
        echo $arr[$k][$j] . " ";
    }
    echo PHP_EOL;
}
