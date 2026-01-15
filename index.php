<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Found You</title>
</head>
<body>
<?php
// Basic: remote address provided by the server
$clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

// If your app is behind a reverse proxy (Cloudflare, load balancer, etc.), you may need:
// if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//     $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
//     $clientIP = trim($ips[0]);
// }

// Escape the output to avoid XSS if this page ever includes user-supplied data
$clientIP = htmlspecialchars($clientIP, ENT_QUOTES, 'UTF-8');
?>
<p>Your IP address is: <?php echo $clientIP; ?></p>
</body>
</html>