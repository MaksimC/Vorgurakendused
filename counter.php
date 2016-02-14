<?php

$file ="count.txt:
//open the file to get existing content
$current = file_get_contents($file);

$current = $current + 1;

//write contents back to file

file_put_contents($file, $current);

echo "lehe kulaliste arv: ".$current;
?>