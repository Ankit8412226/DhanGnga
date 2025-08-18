<?php
// disable caching
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// include database connection and Paytm libraries
require_once("conn.php");
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");

// initialize variables
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = false;

// retrieve all parameters sent by Paytm
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";

// verify the checksum sent by Paytm to ensure the authenticity of the response
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum);

if ($isValidChecksum) {
    // checksum matched, check transaction status
    $status = $_POST["STATUS"];
    $orderId = $_POST["ORDERID"];
    $amount = $_POST["TXNAMOUNT"];

    if ($status === "TXN_SUCCESS") {
        // success, process transaction and redirect to success page
        // verify order id and amount with your application's records
        $query = "SELECT * FROM transaction WHERE ORDERID = '$orderId' AND TXNAMOUNT = '$amount' LIMIT 1";
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
        $row = mysqli_fetch_assoc($result);

        // process transaction here
        // ...

        // redirect to success page with order id
        echo "<script>window.location.href='http://nayesochnayakadam.com/token.php?id=$orderId';</script>";
    } else {
        // failure, save transaction details to database and redirect to error page
        $mid = $_POST["MID"];
        $txnId = $_POST["TXNID"];
        $paymentMode = $_POST["PAYMENTMODE"];
        $currency = $_POST["CURRENCY"];
        $txnDate = $_POST["TXNDATE"];
        $respCode = $_POST["RESPCODE"];
        $respMsg = $_POST["RESPMSG"];
        $gatewayName = $_POST["GATEWAYNAME"];
        $bankTxnId = $_POST["BANKTXNID"];
        $bankName = $_POST["BANKNAME"];

        // insert transaction details to database
        $query = "INSERT INTO transaction (ORDERID, MID, TXNID, TXNAMOUNT, PAYMENTMODE, CURRENCY, TXNDATE, STATUS, RESPCODE, RESPMSG, GATEWAYNAME, BANKTXNID, BANKNAME, CHECKSUMHASH)
                  VALUES ('$orderId', '$mid', '$txnId', '$amount', '$paymentMode', '$currency', '$txnDate', '$status', '$respCode', '$respMsg', '$gatewayName', '$bankTxnId', '$bankName', '$paytmChecksum')";
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

        // redirect to error page with order id
        echo "<script>window.location.href='http://nayesochnayakadam.com/error.php?id=$orderId';</script>";
    }
} else {
    // invalid checksum, log error and redirect to error page
    $orderId = isset($_POST["ORDERID"]) ? $_POST["ORDERID"] : "";
    error_log("Invalid Paytm checksum for order $orderId");

    // redirect to error page
    echo "<script>window.location.href='http://nayesochnayakadam.com/error.php?id=$orderId';</script

</script>";   
   }
	
?>