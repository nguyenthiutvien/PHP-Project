<?php
header('Content-type: text/html; charset=utf-8');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $image = "";
    $name = "";
    $price = "";
    $from_to = "";
    $link = new mysqli("localhost", "root", "", "traveldana");
    $query = "select * from cart where id_cart='$id'";
    $result = mysqli_query($link, $query);
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['name_tour'];
        $price=$row['price_tour'];
        $from_to=$row['from_to'];
    }

    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }


    $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


    $partnerCode = 'MOMOBKUN20180529';
    $accessKey = 'klm05TvNBzhg7h7j';
    $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

    $orderInfo = "Thanh toán qua mã QR MoMo, Tên tour: $name, Địa điểm: $from_to";
    $amount = $price;
    $orderId = time() ."";
    $redirectUrl = "http://localhost:8080/php-project/PHP-Project/index.php?momo=paymentinfo";
    $ipnUrl = "http://localhost:8080/php-project/PHP-Project/index.php?momo=paymentinfo";
    $extraData = "";

    $requestId = time() . "";
    $requestType = "captureWallet";
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);

}
?>
