<?php
$access_token = 'aynU/imZrRfRRyr4PI+i4Daa2JhPrh9qaD/vhrJeBywOEJH1wHPJzeFamKwdrcqUTro8GTwkJS/X1sjJygmpeuhpVXJrtCX/TiqgNGB/QLjRrLcq/XmWxuRe54diFgLT9qUEJmmfyYHDwao2kzbCngdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;