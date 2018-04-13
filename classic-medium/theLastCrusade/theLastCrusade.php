<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d",
    $W, // number of columns.
    $H // number of rows.
);
$map = array();
for ($i = 0; $i < $H; $i++) {
    $LINE = stream_get_line(STDIN, 200 + 1,
        "\n"); // represents a line in the grid and contains W integers. Each integer represents one room of a given type.
    $map[] = explode(' ', $LINE);
}

fscanf(STDIN, "%d",
    $EX // the coordinate along the X axis of the exit (not useful for this first mission, but must be read).
);
// game loop
while (true) {
    fscanf(STDIN, "%d %d %s",
        $XI,
        $YI,
        $POS
    );

    $case = $map[$YI][$XI];
    switch ($case) {
        case 0:
            $goTo = "The wall";
            break;
        case 1:
        case 3:
        case 7:
        case 8:
        case 9:
        case 12:
        case 13:
            $newY = $YI + 1;
            $goTo = "$XI $newY";
            break;
        case 2:
        case 6:
            if ($POS == 'LEFT') {
                $newX = $XI + 1;
            } else {
                $newX = $XI - 1;
            }
            $goTo = "$newX $YI";
            break;
        case 4:
            if ($POS == 'TOP') {
                $newX = $XI - 1;
                $goTo = "$newX $YI";
            } else {
                $newY = $YI + 1;
                $goTo = "$XI $newY";
            }
            break;
        case 5:
            if ($POS == 'TOP') {
                $newX = $XI + 1;
                $goTo = "$newX $YI";
            } else {
                $newY = $YI + 1;
                $goTo = "$XI $newY";
            }
            break;
        case 10:
            $newX = $XI - 1;
            $goTo = "$newX $YI";
            break;
        case 11:
            $newX = $XI + 1;
            $goTo = "$newX $YI";
            break;
        default:
            $newY = $YI + 1;
            $goTo = "$XI $newY";
    }

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to const_dump): error_log(var_export($const, true));

    // One line containing the X Y coordinates of the room in which you believe Indy will be on the next turn.
    echo("$goTo\n");
}
?>