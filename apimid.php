<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/SANDBOX-G710367688-806/status",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "\n\n",
    CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Content-Type: application/json",
        "Authorization: {YOUR_API_KEY}"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
