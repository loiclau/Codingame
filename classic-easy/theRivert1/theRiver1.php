<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $r1
);
fscanf(STDIN, "%d",
    $r2
);

$meet = false;

while (!$meet) {
    if ($r1 < $r2) {
        $r1 = nextRiv($r1);
    } elseif ($r1 > $r2) {
        $r2 = nextRiv($r2);
    } else {
        $meet = true;
    }
}

/**
 * @param $riv
 * @return int
 */
function nextRiv($riv)
{
    $somme = $riv;
    while ($riv != 0) {
        $somme += $riv % 10;
        $riv /= 10;
    }
    return $somme;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo($r1 . "\n");
?>
