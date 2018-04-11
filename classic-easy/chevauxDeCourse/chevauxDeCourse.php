<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$power = array();
$difMin = 10000000;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d",
        $Pi
    );
    $power[] = $Pi;
}
sort($power);
for ($i = 0; $i < $N; $i++) {
    if (isset($power[$i + 1])) {
        $dif = $power[$i + 1] - $power[$i];
        if ($dif < $difMin) {
            $difMin = $dif;
        }
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$difMin\n");
?>