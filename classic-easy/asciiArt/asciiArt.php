<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);

$charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ?';
$letterList = array_flip(str_split($charset));
$T = stream_get_line(STDIN, 256 + 1, "\n");
$lines = array();
$letterRow = array();
$inputList = str_split(strtoupper($T));

for ($i = 0; $i < $H; $i++) {
    $row = stream_get_line(STDIN, 1024 + 1, "\n");
    $letterRow[] = str_split($row, $L);
    $lines[] = '';
}

foreach ($inputList as $letter) {
    if (!array_key_exists($letter, $letterList)) {
        $letterPos = end($letterList);
    } else {
        $letterPos = $letterList[$letter];
    }

    for ($i = 0; $i < $H; $i++) {
        $lines[$i] .= $letterRow[$i][$letterPos];
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

foreach ($lines as $line) {
    if ($line != '') {
        echo("$line\n");
    }
}
?>