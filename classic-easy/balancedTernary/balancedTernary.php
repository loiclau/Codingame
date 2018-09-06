<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $DEC
);

$negative = false;
$output = "";

if ($DEC < 0) {
    $negative = true;
    $DEC *= -1;
}

while ($DEC > 0) {
    $rest = $DEC % 3;
    $DEC = (int)($DEC / 3);

    if ($rest == 2) {
        $DEC++;
    }

    if ($rest == 0) {
        $output = '0' . $output;
    } elseif ($rest == 1) {
        if ($negative) {
            $output = 'T' . $output;
        } else {
            $output = '1' . $output;
        }
    } else {
        if ($negative) {
            $output = '1' . $output;
        } else {
            $output = 'T' . $output;
        }
    }
}

if (empty($output)) {
    $output = 0;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$output\n");
?>