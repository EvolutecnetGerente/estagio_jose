<?php

$cep = "01310100";
$link = "https://viacep.com.br/ws/01310100/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_encode($response, true);

print_r($data);