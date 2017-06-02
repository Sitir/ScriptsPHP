<?php
$array =array();
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

           
           array_push($array,$entry);
        }
    }

    closedir($handle);
}

foreach ($array as $value) {
    echo $value . "\n <br>";
}