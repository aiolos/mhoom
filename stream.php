<?php
set_time_limit(0);
$filePath = "./mhoom.mp3";
// Stream quality: 128 kbit/s => 128 * 1024 / 8 bytes/s
$bitrate = 128 * 1024 / 8;

header('Content-type: audio/mpeg');
header ("Pragma: no-cache");

$resource = fopen($filePath, 'rb');
while(!feof($resource)){
    echo fread($resource, $bitrate);
    ob_flush();
    flush();
    sleep(1);
}
fclose($resource);
