<?php
// ===============================
// Fancode Proxy Script
// ===============================

// Original Fancode Base URL
$baseUrl = "https://in-mc-fdlive.fancode.com/mumbai/133234_english_hls_185276fe1c35207ta-di_h264/";

// If no file requested, serve index.m3u8
$file = isset($_GET['file']) ? $_GET['file'] : "index.m3u8";

// Build target URL
$target = $baseUrl . $file;

// Fetch with curl
$ch = curl_init($target);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

// Fix .m3u8 paths so that .ts files also go through proxy
if (strpos($file, ".m3u8") !== false) {
    $data = preg_replace('/(.*\.ts)/', 'proxy.php?file=$1', $data);
}

// Send correct headers
header("Content-Type: " . $info['content_type']);
echo $data;
?>
