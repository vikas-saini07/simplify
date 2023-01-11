<?php
$HTTP_RAW_POST_DATA =file_get_contents('php://input');

$file = 'log.txt';
file_put_contents($file, $HTTP_RAW_POST_DATA, FILE_APPEND);
?>
