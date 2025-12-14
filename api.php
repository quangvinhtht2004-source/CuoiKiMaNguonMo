<?php
// Thiết lập header để trả về JSON
header('Content-Type: application/json');

// Dữ liệu mô phỏng một hành tinh ngoài hệ Mặt trời (Exoplanet)
$astro_data = array(
    'server_status' => 'ONLINE',
    'feed_timestamp' => date('Y-m-d H:i:s'),
    'name' => 'Kepler-186f',
    'discovery_date' => '2014-04-17',
    'mass_earths' => 1.4, // Khối lượng gấp 1.4 lần Trái Đất
    'distance_au' => 360 // Khoảng cách tính bằng Đơn vị Thiên văn (AU)
);

// Chuyển mảng PHP thành chuỗi JSON
echo json_encode($astro_data);
?>