<?php

// トークンを記載します
$token = 'qkbzVtwy6NBOOBmsJNxMsuSeW5Fs3ubCGg1NIf5UFTr';
// リクエストヘッダを作成します
$message = '今日も振り返りをしよう～～';
$query = http_build_query(['message' => $message]);
$header = [
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: Bearer ' . $token,
        'Content-Length: ' . strlen($query)
];
$ch = curl_init('https://notify-api.line.me/api/notify');
$options = [
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_POST            => true,
    CURLOPT_HTTPHEADER      => $header,
    CURLOPT_POSTFIELDS      => $query
];
curl_setopt_array($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($ch, $options);
curl_exec($ch);
curl_close($ch);