<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')){

    echo $content = fread($handle, filesize($file)); //each bite equals a character or filesize($file) for all of the doc

    fclose($handle);
}else {

echo"The application was not able to write on the file";
}


?>