<?php

$link = "https://ciclovivo.com.br/wp-content/uploads/2018/10/iStock-536613027.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">

