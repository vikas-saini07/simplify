<?php

require_once("../lib/Simplify.php");
Simplify::$publicKey = $_POST['pubkey'];
Simplify::$privateKey = $_POST['pvtkey'];


$cardToken = Simplify_CardToken::createCardToken(array(
        'card' => array(
           'addressState' => $_POST['addstate'],
           'expMonth' => $_POST['expmonth'],
           'expYear' => $_POST['expyear'],
           'addressCity' => $_POST['addcity'],
           'cvc' => $_POST['cardcvc'],
           'number' => $_POST['cardnum']
        ),
        'secure3DRequestData' => array(
           'amount' => '10',
           'currency' => $_POST['currency'],
           'description' => 'description'
        )
));

print_r($cardToken);

?>
