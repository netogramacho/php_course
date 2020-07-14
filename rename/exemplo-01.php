<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$fileName = "Readme.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName, "w+");

    fwrite($file, date("d/m/Y : H:i:s"));

}

rename(
    $dir1 . DIRECTORY_SEPARATOR . $fileName, 
    $dir2 . DIRECTORY_SEPARATOR . $fileName, 
    
)

?>