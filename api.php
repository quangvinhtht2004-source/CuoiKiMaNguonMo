<?php
// Thiết lập header để trình duyệt/frontend biết đây là JSON
header('Content-Type: application/json');

// Khởi tạo một mảng dữ liệu (giống như từ database)
$data = array(
    'status_code' => 'OPERATIONAL',
    'message' => 'High score service running smoothly.',
    'version' => '2.1.0', // Phiên bản mới hơn
    'active_players' => rand(2500, 7500), // Tạo số ngẫu nhiên
    'timestamp' => date('Y-m-d H:i:s')
);

// Chuyển mảng PHP thành chuỗi JSON và in ra
echo json_encode($data);
?>