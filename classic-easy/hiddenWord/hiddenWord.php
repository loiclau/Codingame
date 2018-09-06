<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);

$grid = array('raw'=>array(),'value'=>array());
$wordsList = array();
$output = '';

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%s", $aword);
    $wordsList[] = $aword;
}

fscanf(STDIN, "%d %d", $h, $w);

for ($i = 0; $i < $h; $i++) {
    fscanf(STDIN, "%s", $line);
    $grid['raw'][$i] = str_split($line);
}

function searchWord($x, $y, $dirX, $dirY, $word, &$grid)
{
    for ($i = 0; $i < strlen($word); $i++) {
        if ($y + $i * $dirX < 0) {
            return;
        }
        if ($x + $i * $dirY < 0) {
            return;
        }
        if ($y + $i * $dirX >= count($grid['raw'])) {
            return;
        }
        if ($x + $i * $dirY >= count($grid['raw'][$i])) {
            return;
        }

        if ($grid['raw'][$y + $i * $dirX][$x + $i * $dirY] != $word[$i]) {
            return;
        }
    }

    for ($i = 0; $i < strlen($word); $i++) {
        $grid['value'][$y + $i * $dirX][$x + $i * $dirY] = false;
    }
}

function tryWords($x, $y, $wordsList, &$grid)
{
    foreach ($wordsList as $word) {
        searchWord($x, $y, 0, 1, $word, $grid);
        searchWord($x, $y, 0, -1, $word, $grid);
        searchWord($x, $y, 1, 0, $word, $grid);
        searchWord($x, $y, 1, 1, $word, $grid);
        searchWord($x, $y, 1, -1, $word, $grid);
        searchWord($x, $y, -1, 0, $word, $grid);
        searchWord($x, $y, -1, 1, $word, $grid);
        searchWord($x, $y, -1, -1, $word, $grid);
    }
}

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        tryWords($x, $y, $wordsList, $grid);
    }
}

for ($y = 0; $y < $h; $y++) {
    for ($x = 0; $x < $w; $x++) {
        if (!isset($grid['value'][$y][$x])) {
            $output .= $grid['raw'][$y][$x];
        }
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$output");
?>
