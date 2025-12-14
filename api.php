<?php
header('Content-Type: text/plain'); // Đặt header để trình duyệt hiểu đây là văn bản thuần túy

$server_status = "ONLINE"; // Hoặc "OFFLINE", "MAINTENANCE"
$active_players = rand(100, 5000); // Số người chơi ngẫu nhiên
$game_version = "1.5.0"; // Phiên bản trò chơi

echo "Game Server Status: " . $server_status . " | Active Players: " . $active_players . " | Version: " . $game_version;
?>