<?php
// Thiết lập header để trả về JSON
header('Content-Type: application/json');

// Dữ liệu mô phỏng trạng thái hệ thống game
$status = 'ACTIVE'; // Hoặc 'MAINTENANCE', 'DOWN'
$error_code = 'G-001'; 

// Dùng ngẫu nhiên để mô phỏng một lỗi nhỏ không thường xuyên
if (rand(1, 10) === 1) { // 10% khả năng bị lỗi
    $status = 'MAINTENANCE';
    $error_code = 'E-404';
}

$system_data = array(
    'server_status' => $status,
    'timestamp' => date('Y-m-d H:i:s'),
    'error_code' => $error_code,
    'message' => 'System diagnostics complete.'
);

// Chuyển mảng PHP thành chuỗi JSON
echo json_encode($system_data);
?>