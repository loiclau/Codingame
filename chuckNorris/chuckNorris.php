<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");
$binString = '';
$letterList = str_split($MESSAGE);
foreach ($letterList as $letter) {
    $binString .= str_pad(decbin(ord($letter)), 7, '0', STR_PAD_LEFT);
}

$binList = str_split($binString);
$nb = count($binList);
$first = 1;
$chuckNorris = '';

for ($i = 0; $i < $nb; $i++) {
    if ($first == 1 && $binList[$i] == 1) {
        $chuckNorris .= ' 0 ';
        $first = 0;
    } elseif ($first == 1 && $binList[$i] == 0) {
        $chuckNorris .= ' 00 ';
        $first = 0;
    }
    $chuckNorris .= '0';
    if (isset($binList[$i + 1]) && ($binList[$i] != $binList[$i + 1])) {
        $first = 1;
    }
}

$chuckSay = trim($chuckNorris);

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$chuckSay\n");
?>