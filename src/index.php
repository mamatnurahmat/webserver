<?php
phpinfo();

// Cek koneksi Redis
$redis = new Redis();
try {
    $redis->connect('redis', 6379);
    echo "Connected to Redis";
} catch (Exception $e) {
    echo "Could not connect to Redis: " . $e->getMessage();
}

