<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.simplify.com/commerce/simplify.pay.js"></script>
<link rel="stylesheet" type="text/css" href="css/hostedchkout/style.css">




<script>
  /**
     * Configure hosted payments callback.
     */
    var hostedPayments = SimplifyCommerce.hostedPayments(
        function(response) {
            var cardToken = response.cardToken;
            var amount = response.amount;
            var currency = "<?php echo $_POST['currency'] ?>";
            var pubkey =  "<?php echo $_POST['pubkey'] ?>";
            var pvtkey =  "<?php echo $_POST['pvtkey'] ?>";
            console.log(response);
            console.log("Card Token: " + cardToken);
            var ref = "<?php echo $_POST['ref'] ?>"
            // TODO: Pass token to the server & use Simplify's API to make a payment
                        completePayload = {
                                token: response.cardToken,
                                name: "<?php echo $_POST['name'] ?>",
                                email: "<?php echo $_POST['email'] ?>",
                                ref: ref,
                                amount: amount,
                                desc: "<?php echo $_POST['desc'] ?>",
                                currency: currency,
                                pubkey: pubkey,
                                pvtkey: pvtkey
                               
                        };

                        $.post('../directapi/createpayment_post.php', completePayload, function (completeResponse, status) {
                                var response = $.parseJSON(completeResponse);
                                console.log(response);
                        });
                        hostedPayments.enablePayBtn();

        },
        {
            operation: 'create.token',
            name: "<?php echo $_POST['name'] ?>",
            description: "<?php echo $_POST['desc'] ?>",
            amount: "<?php echo $_POST['amount'] ?>",
            email: "<?php echo $_POST['email'] ?>",
            color: "#12B830"
        }
    );
    /**
     * Handle the error response from the server call that
     * failed to make a payment from the card token.
     */
    function apiPaymentErrorHandler() {
        // re-enable the payment button, so the user can try again.
        hostedPayments.enablePayBtn();
        // TODO: Handle error
    }
</script>
</head>
<body>
<style>
#simplify-checkout-embed-frame{
    height: 605px; // Value may need adjusting per your requirement
    overflow: hidden;
}
</style>
<div id="display"></div>
<iframe class="myiframe" name="Simplify Form"
        data-sc-key="<?php echo $_POST['pubkey'] ?>",
        data-amount="<?php echo $_POST['amount'] ?>">
</iframe>
</body>
</html>
