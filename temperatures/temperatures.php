<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$temperature = 5527;
$inputs = fgets(STDIN);
$inputs = explode(" ", $inputs);

for ($i = 0; $i < $n; $i++) {
    $t = (int)$inputs[$i]; // a temperature expressed as an integer ranging from -273 to 5526
    if (abs($temperature) > abs($t) || (abs($temperature) === abs($t) && $t > 0)) {
        $temperature = $t;
    }
}

if ($n === 0) {
    $temperature = 0;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$temperature\n");
?>