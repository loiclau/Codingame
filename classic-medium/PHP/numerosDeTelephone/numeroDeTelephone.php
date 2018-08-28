<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$counter = 0;
$tree = array();

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $telephone);
    $numbers = str_split($telephone);
    $nbNum = count($numbers);
    $refTree = &$tree;
    for ($j = 0; $j < $nbNum; $j++) {
        $number = $numbers[$j];
        if (!isset($refTree[$number])) {
            $counter++;
            $refTree[$number] = array();
        }
        $refTree = &$refTree[$number];
    }
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to const_dump): error_log(var_export($const, true));

/*
// dont use tree
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $telephone);
    $nbNum = strlen($telephone);
    for ($j = 1; $j <= $nbNum; $j++) {
        $newSearch = substr($telephone, 0, $j);
        if (!isset($tree[$newSearch])) {
            if ($j == $nbNum) {
                $tree[$newSearch] = 1;
            } else {
                $tree[$newSearch] = 0;
            }
        }
    }
}
$counter = count($tree);
*/

// The number of elements (referencing a number) stored in the structure.
echo("$counter\n");
?>