<?php
header("Content-Type: application/vnd.apple.mpegurl");

$url = "https://in-mc-fdlive.fancode.com/mumbai/133234_english_hls_185276fe1c35207ta-di_h264/index.m3u8";

$data = @file_get_contents($url);
if ($data !== false) {
    echo $data;
} else {
    echo "#EXTM3U\n#EXTINF:-1, Stream Not Available\n";
}
?>
