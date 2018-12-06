<?php

$path = "C:\\Users\\dimax\\Downloads\\OSPanel\\domains\\php-lessons\\filesystem\\killme";


function read_from_dir($dirname) {
    if (is_dir($dirname)) {
        if ($dh = opendir($dirname)) {
            while ( ($file = readdir($dh)) !== false ) {
              $kilall = $dirname."\\".$file;
              unlink($kilall);
            }
            closedir($dh);
        }
    }
    rmdir($dirname);
}

read_from_dir($path);

