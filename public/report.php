<?php
$json = file_get_contents("http://localhost/get");
$array = json_decode($json);
foreach ($array as $key => $value) {
	var_dump($value->clicks);
}
?>
