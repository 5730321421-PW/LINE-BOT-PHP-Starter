<?php
$access_token = 'V01u67k7fJRsYQ5PrhganFhWspbxSSN6IhfDt7ZrHFQ9uY0+ZfpchtdNJInJpLIlhASPJmdXHtF0OnVBU9zf4NcPjry8/MA2/5ruLY/tYsYge90Zb2ztLcWH0an3pwv0vg+Gq6YHi8wUdJu4YxxIAwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
