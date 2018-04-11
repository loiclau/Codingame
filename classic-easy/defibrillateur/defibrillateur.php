<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s", $LON);
fscanf(STDIN, "%s", $LAT);
fscanf(STDIN, "%d", $N);

$longitude = (float)deg2rad(str_replace(',', '.', $LON));
$latitude = (float)deg2rad(str_replace(',', '.', $LAT));
$info = array('adress' => '', 'distance' => 10000);

for ($i = 0; $i < $N; $i++) {
    $DEFIB = stream_get_line(STDIN, 256 + 1, "\n");
    $infoDefib = explode(';', $DEFIB);
    $lonDefib = (float)deg2rad(str_replace(',', '.', $infoDefib[4]));
    $latDefib = (float)deg2rad(str_replace(',', '.', $infoDefib[5]));

    $x = ($lonDefib - $longitude) * cos(($latitude + $latDefib) / 2);
    $y = ($latDefib - $latitude);
    $d = (float)(sqrt(pow($x, 2) + pow($y, 2))) * 6371;

    if ($d < $info['distance']) {
        $info['distance'] = $d;
        $info['adress'] = $infoDefib[1];
    }

}

$adress = $info['adress'];
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("$adress\n");
?>