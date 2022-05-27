        <?php
$params["short"] = 1;
$params["accepted"] = 1;
 $params["version"] = "1";
$params["amount"] = "0.04905350";
$params["currency"] = "ETH";
        $params["cmd"] = "create_withdrawal";
        $params["key"] = "b4f847a0b5af5d8ee875e6c46d5c3804832e8cc303781c733d71f3fe0cc0605e";
$params["address"] = "0xf2347f821efbe88a71a2d8447e5658c109b4b686";
        $encoded = http_build_query($params, ", "&");
        $hmac = hash_hmac("sha512", $encoded, "58Fec41EF63969f31f2DcAFf69247051832311b1e23fA6fe598f81E1E5d04293");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.coinpayments.net/api.php");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("HMAC: ".$hmac));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
        $response = curl_exec($ch);
        $retorno = json_decode($response, true);
        curl_close($ch);
        print_r($retorno);

?>      