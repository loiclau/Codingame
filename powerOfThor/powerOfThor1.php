<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

fscanf(STDIN, "%d %d %d %d",
    $lightX, // the X position of the light of power
    $lightY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

// game loop
while (true) {
    $posX = '';
    $posY = '';
    fscanf(STDIN, "%d",
        $remainingTurns // The remaining amount of turns Thor can move. Do not remove this line.
    );

    if ($initialTY > $lightY) {
        $posY = 'N';
        $initialTY -= 1;
    } elseif ($initialTY < $lightY) {
        $posY = 'S';
        $initialTY += 1;
    }

    if ($initialTX > $lightX) {
        $posX = 'W';
        $initialTX -= 1;
    } elseif ($initialTX < $lightX) {
        $posX = 'E';
        $initialTX += 1;
    }

    $move = $posY . $posX;

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    // A single line providing the move to be made: N NE E SE S SW W or NW
    echo("$move\n");
}
?>