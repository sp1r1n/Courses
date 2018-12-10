<?php
if ($argc > 2) {
    die("amount should be int and should not contain spaces\n");
}
$amount = $argv[1];
$notes = array(500, 200, 100, 50, 20, 10, 5, 2, 1);
$noteCounter = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

for($i = 0; $i < count($noteCounter); $i++) {
    if($amount >= $notes[$i]) {
        $noteCounter[$i] = intval($amount / $notes[$i]);
        $amount = $amount - $noteCounter[$i] * $notes[$i];
    }
}
echo("Currency Count ->\n");
for ($i = 0; $i < 9; $i++) {
    if ($noteCounter[$i] != 0) {
        echo($notes[$i] . " : " .
            $noteCounter[$i] . "\n");
    }
}
