<?php
$method = "";
$method = $_POST['method'];
if ($method == 'createtokenusingmodal') {
header('Location: ./createtokenusingmodal.php');
}

if ($method == 'createtokenusingembed') {
header('Location: ./createtokenusingembed.php');
}
?>
