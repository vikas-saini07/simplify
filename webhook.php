<?php
$HTTP_RAW_POST_DATA =file_get_contents('php://input');

require_once("./lib/Simplify.php");

Simplify::$publicKey = 'YOUR_PUBLIC_API_KEY';
Simplify::$privateKey = 'YOUR_PRIVATE_API_KEY';

$event = Simplify_Event::createEvent(array(
'payload' => $HTTP_RAW_POST_DATA
));

$name = $event->name;
$data = $event->data;

echo $data;
?>
