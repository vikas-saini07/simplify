<?php

require_once("../lib/Simplify.php");
Simplify::$publicKey = $_POST['pubkey'];
Simplify::$privateKey = $_POST['pvtkey'];


$payment = Simplify_Payment::createPayment(array(
        'reference' => $_POST['ref'],
        'amount' => $_POST['amount'],
        'description' => $_POST['desc'],
        'currency' => $_POST['currency'],
		'order.customerEmail' => $_POST['email'],
		'card.name' => $_POST['name'],
		'order.customerName' => $_POST['name'],
        'token' => $_POST['token']
));
 
if ($payment->paymentStatus == 'APPROVED') {
    echo "Payment approved\n";
}

?>
