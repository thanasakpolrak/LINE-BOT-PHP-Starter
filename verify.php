<?php
$access_token = 'g5JAiuTkbAAwmcjI2V3ZB6nYG8eKG5FgOqxrWXz9fpyx5Ur6pKdtHj1sp3tb5smnIHdIFCdEyWVaP4AddgT4jDdSsf0E4rmONa/Wy9A/1CcL2Q2m0eRs18wS3nAjFFiT4V/3LExBC3HUjzSQpeR+OQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;