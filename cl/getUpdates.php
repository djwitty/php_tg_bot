<?php

const BASE_URL = 'https://api.telegram.org/bot';
const TOKEN = '706728723:AAE4EboBhbOWw4i0GhecG3mbUDCh38Wb2yU';
$method = 'getUpdates';

$url = BASE_URL . TOKEN . '/' . $method;
$lastupdate = 23450317;
$params = [
  'offset' => $lastupdate+1
]

$url = $url . '?' . http_build_query($params);

$response = json_decode(
  file_get_contents($url),
  JSON_OBJECT_AS_ARRAY
);

if ($response['ok'])
{
  foreach ($response['result'] as $update)
  {
    echo $update['message']['text'];
    ?><br><?php
  }
}