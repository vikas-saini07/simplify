<?php
$method = "";
$method = $_POST['method'];
if ($method == 'createtokenusingmodal') {
header('Location: hosted/createtokenusingmodal.php');
}

if ($method == 'createtokenusingembed') {
header('Location: hosted/createtokenusingembed.php');
}

if ($method == 'createtokenusingdirect') {
header('Location: directapi/createtokenusingdirect.php');
}
?>
