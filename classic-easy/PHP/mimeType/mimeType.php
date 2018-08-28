<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);

$listMime = array();
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    $listMime[strtolower($EXT)] = $MT;
}

for ($i = 0; $i < $Q; $i++) {
    $mime = "UNKNOWN";
    $FNAME = stream_get_line(STDIN, 500 + 1, "\n"); // One file name per line.
    $path_parts = pathinfo($FNAME);

    if (array_key_exists('extension', $path_parts)) {
        $fileMime = strtolower($path_parts['extension']);
        if (array_key_exists($fileMime, $listMime)) {
            $mime = $listMime[$fileMime];
        }
    }
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));


// For each of the Q filenames, display on a line the corresponding MIME type. If there is no corresponding type, then display UNKNOWN.
    echo("$mime\n");
}
?>