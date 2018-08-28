<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$points = array(
    'a' => 1,
    'b' => 3,
    'c' => 3,
    'd' => 2,
    'e' => 1,
    'f' => 4,
    'g' => 2,
    'h' => 4,
    'i' => 1,
    'j' => 8,
    'k' => 5,
    'l' => 1,
    'm' => 3,
    'n' => 1,
    'o' => 1,
    'p' => 3,
    'q' => 10,
    'r' => 1,
    's' => 1,
    't' => 1,
    'u' => 1,
    'v' => 4,
    'w' => 4,
    'x' => 8,
    'y' => 4,
    'z' => 10
);
$wordList = array();

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    $W = stream_get_line(STDIN, 30 + 1, "\n");
    $wordList[] = $W;
}

$letters = stream_get_line(STDIN, 8 + 1, "\n");
$result = '';
$total = 0;

foreach ($wordList as $word) {
    $hand = str_split($letters);
    $tmpTotal = 0;
    $continue = true;
    foreach (str_split($word) as $letter) {
        if (in_array($letter, $hand)) {
            $pos = $key = array_search($letter, $hand);
            $tmpTotal += $points[$letter];
            unset($hand[$pos]);
        } else {
            $continue = false;
            continue;
        }
    }
    if ($continue) {
        if ($tmpTotal > $total) {
            $total = $tmpTotal;
            $result = $word;
        }
    }
}


//error_log(var_export($LETTERS, true));
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$result\n");
?>
