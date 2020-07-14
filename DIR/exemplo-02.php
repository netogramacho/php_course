<?php

$name = "images";

$images = scandir($name);

$data = array();


foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) {
        $fileName = $name . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($fileName);
        
        $info['size'] = filesize($fileName);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($fileName));
        $info['url'] = 'http://localhost/cursoPHP/dir/' . $fileName;

        array_push($data, $info);

    }
}

echo json_encode($data);

?>