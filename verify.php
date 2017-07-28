<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:1eujkGzOws3Goxl';

$access_token = 'rZC7OxAaKHIz4OS/72ty7JwBYqMJBprC+MsdWsVrG5ePZX2/dhiusE2hYb1vu0BQ4aMA0Ylw2mNnrtHP1OmNZEOJJWyxnfE2JkP0VAOSmZIp5wGDaBp3nC0FGd+qJ6jqaHe7BfN1m2UHBWtdzXEzMAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
