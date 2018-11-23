<?php

const BASE_URL = 'https://api.telegram.org/bot';
const TOKEN = '706728723:AAE4EboBhbOWw4i0GhecG3mbUDCh38Wb2yU';
$method = 'setWebhook';

$url = BASE_URL . TOKEN . '/' . $method;
$options = [
  'url' => 'https://file-7oovn64yc.now.sh/index.php'
]

$response = file_get_contents($url . '?' . http_build_query($options));
