<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d",
    $width,
    $height
);
$cols = array_fill(0, $width, 0);

for ($i = 0; $i < $height; $i++) {
    fscanf(STDIN, "%s",
        $line
    );

    foreach (str_split($line) as $col => $value) {
        if ($value === '#') {
            $cols[$col]++;
        }
    }
}

$newLines = array();
for ($i = 0; $i < $height; $i++) {
    $newLines[$i] = '';
    foreach ($cols as $value) {
        if ($value + $i < $height) {
            $newLines[$i] .= '.';
        } else {
            $newLines[$i] .= '#';
        }
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

foreach ($newLines as $line) {
    echo("$line\n");
}

?>