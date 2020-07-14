<?php

$fileName = "html5.png";

$base64 = base64_encode(file_get_contents($fileName));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($fileName);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;


?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">