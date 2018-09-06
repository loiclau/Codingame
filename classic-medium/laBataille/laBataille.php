<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$cartList = '2,3,4,5,6,7,8,9,10,J,Q,K,A';
$cardPower = array_flip(explode(',', $cartList));
$handP1 = $handP2 = $pileP1 = $pileP2 = array();
$round = 0;

fscanf(STDIN, "%d",
    $n // the number of cards for player 1
);
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%s",
        $cardp1 // the n cards of player 1
    );
    $handP1[] = $cardp1;
}

fscanf(STDIN, "%d",
    $m // the number of cards for player 2
);
for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%s",
        $cardp2 // the m cards of player 2
    );
    $handP2[] = $cardp2;
}

while (count($handP1) != 0 && count($handP2) != 0) {
    $pileP1[] = $cP1 = array_shift($handP1);
    $pileP2[] = $cP2 = array_shift($handP2);

    if ((int)$cardPower[substr($cP1, 0, -1)] > (int)$cardPower[substr($cP2, 0, -1)]) {
        $handP1 = array_merge($handP1, array_merge($pileP1, $pileP2));
        $pileP1 = $pileP2 = array();
    } elseif ((int)$cardPower[substr($cP1, 0, -1)] < (int)$cardPower[substr($cP2, 0, -1)]) {
        $handP2 = array_merge($handP2, array_merge($pileP1, $pileP2));
        $pileP1 = $pileP2 = array();
    } elseif (count($handP1) < 3 || count($handP2) < 3) {
        echo('PAT');
        exit;
    } else {
        $pileP1 = array_merge($pileP1, array_splice($handP1, 0, 3));
        $pileP2 = array_merge($pileP2, array_splice($handP2, 0, 3));
        $round--;
    }
    $round++;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

if (count($handP1) == 0) {
    echo("2 $round\n");
} else {
    echo("1 $round\n");
}
?>