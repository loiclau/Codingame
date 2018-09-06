<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s",
    $expression
);

$research = array('{', '(', '[', ']', ')', '}');
$tabFind = array();

foreach (str_split($expression) as $key => $char) {
    if (in_array($char, $research)) {
        $tabFind[] = $char;
    }
}

$before = 2049;
$after = count($tabFind);

while ($before != $after) {
    $before = $after;
    for ($i = 0; $i < ($after - 1); $i++) {
        $current = $tabFind[$i];
        $next = $tabFind[$i + 1];
        $strCompare = $current . $next;

        if ($strCompare == '()' ||
            $strCompare == '{}' ||
            $strCompare == '[]') {
            unset($tabFind[$i + 1]);
            unset($tabFind[$i]);
            $i--;
            $tabFind = array_values($tabFind);
        }
        $after = count($tabFind);
    }
}


// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

if (empty($tabFind)) {
    echo("true\n");
} else {
    echo("false\n");
}

?>
