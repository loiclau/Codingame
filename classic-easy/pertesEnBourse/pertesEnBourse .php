<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);
$inputs = fgets(STDIN);
$inputs = array_map('intval', explode(" ", $inputs));

$p = 0;
$currentMax = 0;
$currentMin = 0;
$first = true;

foreach ($inputs as $val) {
    if ($first) {
        $currentMax = $currentMin = $val;
        $first = false;
    } else {
        if ($val > $currentMax) {
            $currentMax = $val;
            $currentMin = $val;
        } else {
            $currentMin = $val;
        }
        $dif = $currentMax - $currentMin;
        if ($dif > $p) {
            $p = $dif;
        }
    }
}

$p *= -1;

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$p\n");
?>