<?php
require __DIR__ . '/vendor/autoload.php';

$API_BASE = 'https://api.sms-io.ru/sms-api/v1/message/';
$API_TOKEN = '_YOUR_TOKEN_HERE_';

$headers = array(
    'Authorization' => 'Token ' . $API_TOKEN,
);
$message = array(
    'external_id' => 'client_generated_id',
    'to_number' => '+71111111111',
    'text' => 'Hello!',
);

$response = Requests::post($API_BASE, $headers, $message);
